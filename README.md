# PK_titan



# Titan App - Complete Flutter Project Documentation

This document provides a comprehensive guide to the Titan App, a feature-rich Flutter application for property management, agent collaboration, and home services. It covers architecture, features, database structure, API usage, and development setup.

---

## 1. Project Overview

Titan is a cross-platform (Android, iOS, Web, Desktop) Flutter application designed for real estate agents, property managers, and homeowners. It serves as a unified platform for:
- Property listings and management
- Agent collaboration and deal tracking
- Home services marketplace
- Transaction and document management

**Key Technologies Used:**
- **Framework**: Flutter (Dart)
- **State Management**: Provider
- **Database**: Firestore
- **Authentication**: Firebase Authentication
- **Storage**: Firebase Storage
- **API**: Firebase Functions (Cloud Functions)
- **Mapping**: google_maps_flutter
- **Location Services**: Geocoding, geolocator
- **Push Notifications**: firebase_messaging
- **Image Handling**: image_picker, image_cropper
- **PDF Generation**: native_pdf_view (via pdf_viewer_plugin)
- **Charting**: fl_chart
- **Video Playback**: video_player

---

## 2. System Architecture

The application follows a standard Flutter architecture pattern with:
- **Presentation Layer**: Widgets (screens, dialogs, custom UI)
- **Business Logic Layer**: Providers, ViewModels
- **Data Layer**: Repository pattern, API clients, database services
- **Domain Layer**: Models, Entities
- **Core Services**: Authentication, Database, Storage, Notifications

### Layered Architecture:
```
Presentation (Screens, Widgets, UI)
    ↓
Business Logic (Providers, Controllers)
    ↓
Data Layer (Repositories, Services, Models)
    ↓
Domain Layer (Entities, Value Objects)
    ↓
Core Services (Firebase, APIs, Utilities)
```

### Key Architectural Components:
- **AuthService**: Handles Firebase Authentication (login, signup, password reset, admin checks)
- **DatabaseService**: Manages Firestore database operations (CRUD, complex queries)
- **StorageService**: Handles Firebase Storage file uploads/downloads
- **AgentsApiService**: Manages API calls to Firebase Functions (property creation, updates, etc.)
- **PropertyService**: Handles property-related logic
- **HomeServicesService**: Manages home services marketplace
- **TransactionService**: Handles transaction and document management
- **PDFService**: Handles PDF generation and viewing
- **NotificationService**: Handles push notifications

---

## 3. Database Schema (Firestore)

The application uses Firestore to store data across multiple collections. Here's a breakdown of the main collections and their document structures:

### 3.1. Users Collection
```
users/{userId}
├─ uid: string            # Firebase Auth UID
├─ userRole: string        # 'superAdmin' | 'admin' | 'agent' | 'client' | 'vendor' | 'supplier' | 'businessOwner'
├─ userName: string        # User's full name
├─ userEmail: string       # Email address
├─ userAvatarUrl: string   # URL to profile picture
├─ createdAt: Timestamp    # When user was created
├─ lastSeen: Timestamp     # Last seen timestamp
├─ phoneNumber: string   # Phone number
├─ whatsappNumber: string  # WhatsApp contact
├─ isBanned: boolean       # Account status
├─ isVerified: boolean     # Email verification status
├─ userType: string        # e.g., 'individual', 'business'
├─組織ID: string           # Optional organization ID
├─ organization: string   # Organization name (if business)
└─ agency: string          # Agency name (if agent)
```

### 3.2. Property Listings Collection
```
property_listings/{propertyId}
├─ propertyId: string
├─ propertyTitle: string
├─ propertyDescription: string
├─ propertyAddress: string
├─ propertyLatitude: number
├─ propertyLongitude: number
├─ propertyType: string    # 'residential', 'commercial', etc.
├─ propertyPrice: number
├─ propertyStatus: string  # 'available', 'rented', 'sold', 'pending', etc.
├─ propertyImages: array<string>   # URLs to images
├─ propertyVideos: array<string>   # URLs to videos
├─ propertyFloorPlanImage: string  # URL to floor plan
├─ bedrooms: number
├─ bathrooms: number
├─ totalArea: number       # Square footage
├─ yearBuilt: number
├─ furnishingStatus: string  # 'furnished', 'semi_furnished', 'unfurnished'
├─ amenities: array<string>
├─ ownerUid: string        # User who owns/listed property
├─ ownerName: string
├─ ownerPhone: string
├─ createdAt: Timestamp
├─ updatedAt: Timestamp
├─ isDeleted: boolean
├─ viewsCount: number
├─ likesCount: number
├─ sharesCount: number
├─ isFeatured: boolean
├─ isTrending: boolean
├─ paymentPlans: array         # Flexible payment plan structure
└─ currency: string          # e.g., 'USD', 'AED', 'PKR'
```

### 3.3. Home Services Collection
```
home_services/{serviceId}
├─ serviceId: string
├─ serviceName: string
├─ serviceDescription: string
├─ serviceCategory: string     # e.g., 'cleaning', 'plumbing', 'electrical', 'moving', 'painting', etc.
├─ servicePrice: number
├─ servicePriceUnit: string    # e.g., 'per_hour', 'fixed', 'per_square_foot'
├─ serviceDuration: number     # Estimated duration
├─ serviceImage: string        # URL to service image
├─ providerUid: string         # Service provider (vendor) ID
├─ providerName: string
├─ providerRating: number
├─ reviewsCount: number
├─ isVerified: boolean
├─ isActive: boolean
├─ pricing: object           # Flexible pricing structure
└─ serviceIncludes: array<string>  # List of what's included in service
```

### 3.4. Agents (Employees) Collection
```
agents/{agentId}
├─ agentId: string
├─ userId: string
├─ organizationUid: string
├─ organizationName: string
├─ agentName: string
├─ agentEmail: string
├─ agentPhone: string
├─ agentSpecialization: string
├─ agentAvatarUrl: string
├─ joinedAt: Timestamp
├─ isActive: boolean
├─ isBanned: boolean
├─ performanceRating: number
├─ dealsClosedCount: number
├─ propertiesListedCount: number
└─ lastActive: Timestamp
```

### 3.5. Clients Collection
```
clients/{clientId}
├─ clientId: string
├─ userId: string
├─ clientName: string
├─ clientEmail: string
├─ clientPhone: string
├─ clientAvatarUrl: string
├─ savedProperties: array<string>  # Property IDs
├─ interestedCategories: array<string>
├─ preferences: object
├─ createdAt: Timestamp
└─ lastSeen: Timestamp
```

### 3.6. Transactions Collection
```
transactions/{transactionId}
├─ transactionId: string
├─ propertyId: string
├─ propertyTitle: string
├─ propertyPrice: number
├─ propertyType: string
├─ buyerId: string
├─ sellerId: string
├─ transactionDate: Timestamp
├─ transactionType: string  # 'sale', 'rent'
├─ transactionStatus: string
├─ amount: number
├─ commissionRate: number
├─ agentId: string
├─ agentName: string
├─ agentCommission: number
├─ organizationId: string
├─ documents: array<string>  # URLs to documents
├─ paymentSchedule: array      # Installment details
└─ notes: string
```

### 3.7. Property Inspections (Bookings) Collection
```
property_inspections/{inspectionId}
├─ inspectionId: string
├─ propertyId: string
├─ clientUid: string
├─ clientName: string
├─ clientEmail: string
├─ agent
