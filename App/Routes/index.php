<?php

/*
|----------------------------------------------
| Routes Configuration
|----------------------------------------------
| 
| Here is where you can configuration 
| url web routes for your application.
*/

// static routes
$router->get('/', [HomeController::class, 'index']);
$router->get('/index', [HomeController::class, 'index']);
$router->get('/about-us', [HomeController::class, 'about_us']);
$router->get('/how-it-works', [HomeController::class, 'how_it_works']);
$router->get('/ajax-subscribe', [HomeController::class, 'ajax_subscribe']);

$router->get('/blog', [HomeController::class, 'blognews_update']);
$router->get('/news', [HomeController::class, 'blogpost_details']);
$router->get('/ajax-blog-post-action', [HomeController::class, 'ajax_blog_post_action']);
$router->get('/ajax-front-search', [HomeController::class, 'ajax_front_search']);

$router->get('/faqs', [HomeController::class, 'faqs']);
$router->get('/privacy-policy', [HomeController::class, 'privacy_policy']);
$router->get('/terms-of-service', [HomeController::class, 'terms_of_service']);
$router->get('/testimonials', [HomeController::class, 'testimonials']);

$router->get('/write-us', [HomeController::class, 'contact_us']);
$router->get('/ajax-contact', [HomeController::class, 'ajax_contact']);

$router->get('/private-session', [HomeController::class, 'private_session']);
$router->get('/mobile-view', [HomeController::class, 'mobile_view']);


// Registration & Login routes
// $router->get('/', [LoginController::class, 'member_area']);
$router->get('/login', [LoginController::class, 'member_area']);
$router->get('/ajax-login', [LoginController::class, 'ajax_login']);

$router->get('/register', [RegisterController::class, 'new_membership']);
$router->get('/ajax-register', [RegisterController::class, 'ajax_membership']);

$router->get('/forgot-password', [LoginController::class, 'forgot_password']);
$router->get('/ajax-forgot', [LoginController::class, 'ajax_forgotpassword']);

$router->get('/reset-password', [LoginController::class, 'reset_password']);
$router->get('/ajax-reset', [LoginController::class, 'ajax_resetpassword']);

$router->get('/verify-email', [RegisterController::class, 'confirm_member']);









// User Dashboard routes
$router->get('/us-index', [UserController::class, 'member_dashboard']);
$router->get('/us-buddies', [UserController::class, 'member_people']);
$router->get('/us-profile', [UserController::class, 'member_profile']);
$router->get('/us-settings', [UserController::class, 'member_settings']);
$router->get('/us-activities', [UserController::class, 'member_activity']);
$router->get('/us-comment', [UserController::class, 'member_comment']);
$router->get('/us-messages', [UserController::class, 'member_messages']);
$router->get('/us-message-reply', [UserController::class, 'member_message_reply']);
$router->get('/us-chats', [UserController::class, 'member_chats']);
$router->get('/us-preferences', [UserController::class, 'member_preferences']);
$router->get('/us-notifications', [UserController::class, 'member_notifications']);
$router->get('/view-user', [UserController::class, 'view_user_profile']);
$router->get('/us-faqs', [UserController::class, 'member_faqs']);
$router->get('/us-character-test', [UserController::class, 'member_character_test']);
$router->get('/us-subscription-plan', [UserController::class, 'member_subscription_plan']);
$router->get('/us-private-session', [UserController::class, 'member_private_session']);
$router->get('/us-transactions', [UserController::class, 'member_transactions']);
$router->get('/us-news-updates', [UserController::class, 'member_news_updates']);
$router->get('/us-subscription-payment', [UserController::class, 'member_subscription_payment']);

//User Ajax
$router->get('/ajax-interest', [UserController::class, 'ajax_interest']);
$router->get('/ajax-language', [UserController::class, 'ajax_language']);
$router->get('/ajax-update-bio', [UserController::class, 'ajax_update_bio']);
$router->get('/ajax-location', [UserController::class, 'ajax_location']);
$router->get('/ajax-personal-details', [UserController::class, 'ajax_personal_details']);
$router->get('/ajax-password-change', [UserController::class, 'ajax_password_change']);
$router->get('/ajax-worknedu', [UserController::class, 'ajax_workneducation']);
$router->get('/ajax-myself', [UserController::class, 'ajax_myself']);
$router->get('/ajax-preference', [UserController::class, 'ajax_preference']);
$router->get('/ajax-send-buddy-request', [UserController::class, 'ajax_send_buddy_request']);
$router->get('/ajax-accept-buddy-request', [UserController::class, 'ajax_accept_buddy_request']);
$router->get('/ajax-send-buddy-action', [UserController::class, 'ajax_send_buddy_action']);
$router->get('/ajax-profile-photo', [UserController::class, 'ajax_profile_photo']);
$router->get('/ajax-cover-photo', [UserController::class, 'ajax_cover_photo']);
$router->get('/ajax-post-view', [UserController::class, 'ajax_post_view']);
$router->get('/ajax-post-action', [UserController::class, 'ajax_post_actions']);
$router->get('/ajax-post-comment', [UserController::class, 'ajax_post_comment']);
$router->get('/ajax-report-post', [UserController::class, 'ajax_report_post']);
$router->get('/ajax-notify-status', [UserController::class, 'ajax_notify_status']);
$router->get('/ajax-activity-status', [UserController::class, 'ajax_activity_status']);
$router->get('/ajax-make-payment', [UserController::class, 'ajax_make_payment']);
$router->get('/ajax-delete-post', [UserController::class, 'ajax_delete_post']);








// Admin Dashboard routes
$router->get('/ad-index', [AdminController::class, 'admin_dashboard']);
$router->get('/ad-users', [AdminController::class, 'app_users_data']);
$router->get('/ad-user-details', [AdminController::class, 'member_profile_details']);
$router->get('/ad-profile', [AdminController::class, 'member_profile']);
$router->get('/ad-notify', [AdminController::class, 'member_notifications']);
$router->get('/ad-api-settings', [AdminController::class, 'member_api_settings']);
$router->get('/ad-blog-posts', [AdminController::class, 'member_blog_posts']);
$router->get('/ad-blog-post-details', [AdminController::class, 'member_blog_posts']);
$router->get('/ad-create-blog-post', [AdminController::class, 'member_create_blog_post']);
$router->get('/ad-blog-settings', [AdminController::class, 'member_blog_settings']);
$router->get('/ad-coy-settings', [AdminController::class, 'member_coy_settings']);
$router->get('/ad-dating-settings', [AdminController::class, 'member_dating_settings']);
$router->get('/ad-transactions', [AdminController::class, 'member_transactions']);
$router->get('/ad-messages', [AdminController::class, 'messages_data']);
$router->get('/ad-all-ads', [AdminController::class, 'all_user_ads']);
$router->get('/ad-ads-details', [AdminController::class, 'user_ad_details']);
$router->get('/ad-newsletter', [AdminController::class, 'newsletter_subscribers']);
$router->get('/ad-visitors', [AdminController::class, 'app_visitors']);
$router->get('/ad-activities', [AdminController::class, 'member_activities']);
$router->get('/ad-messages', [AdminController::class, 'app_messages']);






//Admin Ajax
$router->get('/ajax-coy-info', [AdminController::class, 'ajax_coy_info']);
$router->get('/ajax-bank-info', [AdminController::class, 'ajax_bank_info']);
$router->get('/ajax-api-connect', [AdminController::class, 'ajax_api_connect']);
$router->get('/ajax-currency-info', [AdminController::class, 'ajax_currency_info']);
$router->get('/ajax-exchange-info', [AdminController::class, 'ajax_exchange_info']);
$router->get('/ajax-subscription-info', [AdminController::class, 'ajax_subscription_info']);
$router->get('/ajax-subscription-plan', [AdminController::class, 'ajax_subscription_plan']);
$router->get('/ajax-transaction-status', [AdminController::class, 'ajax_transaction_status']);
$router->get('/ajax-update-personal-info', [AdminController::class, 'ajax_update_bio']);
$router->get('/ajax-messages-status', [AdminController::class, 'ajax_messages_status']);
$router->get('/ajax-user-status', [AdminController::class, 'ajax_user_status']);
$router->get('/ajax-user-alert', [AdminController::class, 'ajax_user_alert']);
$router->get('/ajax-transaction-reminder', [AdminController::class, 'ajax_transaction_reminder']);
$router->get('/ajax-user-reminder', [AdminController::class, 'ajax_user_reminder']);











//Logout Route For All
$router->get('/logout', [LoginController::class, 'member_logout']);







// dynamic routes
$router->get('/realDynamo/{dynamo}', [HomeController::class, 'realDynamo']);
