# PK_titan: CodeIgniter to Laravel Migration Plan

## Project Overview
- **Current Stack**: CodeIgniter 3 (full-stack - both frontend views and backend logic)
- **Target Stack**: Laravel (full-stack - same functionality replicated in Laravel)
- **Database**: MySQL (`pkproject`)

## Scope

### Controllers to Migrate (25+)

**Admin Controllers:**
1. `Admin.php` - Admin login/auth with role-based redirects
2. `Dashboard.php` - Admin dashboard (redirect to systems/setting)
3. `Systems.php` - System settings, user management, roles, support staff (402 lines)
4. `Mall.php` - Product, category, bulletin, carousel management (425 lines)
5. `Member.php` - Member list, grades, bank details, balance, agents (538 lines)
6. `Trade.php` - Withdrawal/recharge management (88 lines)
7. `Custormerservicelist.php` - Customer service CRUD (124 lines)

**Frontend Controllers:**
8. `Auth.php` - Login, register, logout, credential check
9. `Home.php` - Landing page
10. `Front.php` - User dashboard
11. `Journey.php` - Tasks page
12. `Jsubmission.php` - Task submission (218 lines)
13. `Jhistory.php` - Task/order history (69 lines)
14. `Wallet.php` - Wallet/bank info management
15. `Withdrawal.php` - Withdrawal requests
16. `Deposit.php` - Deposit/recharge
17. `Invitation.php` - Invitation page
18. `Referral.php` - Referral chain with recursive SQL
19. `Security.php` - Password change
20. `Bank.php` - Payment methods
21. `Verification.php` - OTP via Twilio
22. `About.php`, `Faqs.php`, `Term.php`, `Gettouch.php` - Static text pages

### Models to Migrate
1. `Usermodel.php` - 800 lines, handles ALL DB operations
2. `User_verification_model.php` - OTP/Twilio integration

### Views to Migrate
**Admin Views**: adminLogin, setting, memberList, productList, productCategory, bulletin, homePageCarousel, withdraw, rechargedList, addRole, users, textManage, grade, agent, continuousOrder, customerServiceList(s), test, style, register
**Frontend Views**: home, homeMain, login, signup, otp, journey, jsubmission, jhistory, wallet, withdraw, deposit, withdrawHistory, rechargeHistory, invitation, referral, security, sidebar, banks, faq, gettouch

### Database Tables (identified from code)
members, systemuser, addrole, systemsettings, products, productcategories, productorder, homerotators, announcements, textmanagement, customerservicelist, withdrawlists, rechargelist, rechargerequests, todayrewards, memberlevels, referrals, userbankinfos, continuousorders, user_verifications, user_trials, trial_periods, payment_methods

## Migration Steps

1. **Install Laravel** in-place alongside CodeIgniter
2. **Configure** database, sessions, environment
3. **Create middleware** for auth and admin role checks
4. **Create Eloquent models** for all database tables
5. **Migrate controllers** maintaining exact same business logic
6. **Convert views** to Blade templates (copy HTML, replace PHP tags with Blade syntax)
7. **Set up routes** in web.php matching CodeIgniter URL patterns
8. **Copy assets** to Laravel public directory
9. **Test and verify** all routes work
