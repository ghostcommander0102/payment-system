<?php

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=> ['auth','admin','default_lang']],function () {

    Route::get('dashboard', 'DashboardController@adminDashboard')->name('adminDashboard');
    Route::get('profile', 'DashboardController@adminProfile')->name('adminProfile');
    Route::post('user-profile-update', 'DashboardController@UserProfileUpdate')->name('UserProfileUpdate');
    Route::post('upload-profile-image', 'DashboardController@uploadProfileImage')->name('uploadProfileImage');
    Route::get('users', 'UserController@adminUsers')->name('adminUsers');
    Route::get('user-profile', 'UserController@adminUserProfile')->name('adminUserProfile');
    Route::get('user-add', 'UserController@UserAddEdit')->name('admin.UserAddEdit');
    Route::get('user-edit', 'UserController@UserEdit')->name('admin.UserEdit');
    Route::get('user-delete-{id}', 'UserController@adminUserDelete')->name('admin.user.delete');
    Route::get('user-suspend-{id}', 'UserController@adminUserSuspend')->name('admin.user.suspend');
    Route::get('user-active-{id}', 'UserController@adminUserActive')->name('admin.user.active');
    Route::get('user-remove-gauth-set-{id}', 'UserController@adminUserRemoveGauth')->name('admin.user.remove.gauth');
    Route::get('user-email-verify-{id}', 'UserController@adminUserEmailVerified')->name('admin.user.email.verify');
    Route::get('deleted-users', 'UserController@adminDeletedUser')->name('adminDeletedUser');
    Route::get('verification-details-{id}', 'UserController@VerificationDetails')->name('adminUserDetails');

    // ID Varification
    Route::get('pending-id-verified-user', 'UserController@adminUserIdVerificationPending')->name('adminUserIdVerificationPending');
    Route::get('verification-active-{id}-{type}', 'UserController@adminUserVerificationActive')->name('adminUserVerificationActive');
    Route::get('verification-reject', 'UserController@varificationReject')->name('varificationReject');

    Route::get('coin-list', 'CoinController@adminCoinList')->name('adminCoinList');
    Route::get('coin-edit-{id}', 'CoinController@adminCoinEdit')->name('adminCoinEdit');
    Route::post('coin-details-update', 'CoinController@adminCoinUpdate')->name('adminCoinUpdate');
    Route::post('change-coin-status', 'CoinController@adminCoinStatus')->name('adminCoinStatus');

    Route::get('wallet-list', 'TransactionController@adminWalletList')->name('adminWalletList');
    Route::get('transaction-history', 'TransactionController@adminTransactionHistory')->name('adminTransactionHistory');
    Route::get('withdrawal-history', 'TransactionController@adminWithdrawalHistory')->name('adminWithdrawalHistory');

    Route::get('pending-withdrawal', 'TransactionController@adminPendingWithdrawal')->name('adminPendingWithdrawal');
    Route::get('rejected-withdrawal', 'TransactionController@adminRejectedWithdrawal')->name('adminRejectedWithdrawal');
    Route::get('active-withdrawal', 'TransactionController@adminActiveWithdrawal')->name('adminActiveWithdrawal');
    Route::get('accept-pending-withdrawal-{id}', 'TransactionController@adminAcceptPendingWithdrawal')->name('adminAcceptPendingWithdrawal');
    Route::get('reject-pending-withdrawal-{id}', 'TransactionController@adminRejectPendingWithdrawal')->name('adminRejectPendingWithdrawal');


    Route::get('faq-list', 'SettingsController@adminFaqList')->name('adminFaqList');
    Route::get('faq-add', 'SettingsController@adminFaqAdd')->name('adminFaqAdd');
    Route::post('faq-save', 'SettingsController@adminFaqSave')->name('adminFaqSave');
    Route::get('faq-edit-{id}', 'SettingsController@adminFaqEdit')->name('adminFaqEdit');
    Route::get('faq-delete-{id}', 'SettingsController@adminFaqDelete')->name('adminFaqDelete');

    Route::get('general-settings', 'SettingsController@adminSettings')->name('adminSettings');
    Route::get('payment-methods', 'SettingsController@adminPaymentSetting')->name('adminPaymentSetting');
    Route::post('change-payment-methods', 'SettingsController@changePaymentMethodStatus')->name('changePaymentMethodStatus');
    Route::post('common-settings', 'SettingsController@adminCommonSettings')->name('adminCommonSettings');
    Route::post('save-payment-settings', 'SettingsController@adminSavePaymentSettings')->name('adminSavePaymentSettings');
    Route::post('email-save-settings', 'SettingsController@adminSaveEmailSettings')->name('adminSaveEmailSettings');
    Route::post('sms-save-settings', 'SettingsController@adminSaveSmsSettings')->name('adminSaveSmsSettings');
    Route::post('referral-fees-settings', 'SettingsController@adminReferralFeesSettings')->name('adminReferralFeesSettings');
    Route::post('withdrawal-settings', 'SettingsController@adminWithdrawalSettings')->name('adminWithdrawalSettings');
    Route::post('order-settings', 'SettingsController@adminOrderSettings')->name('adminOrderSettings');
    Route::post('terms-condition', 'SettingsController@adminSaveTermsCondition')->name('adminSaveTermsCondition');

    Route::get('send-email', 'DashboardController@sendEmail')->name('sendEmail');
    Route::get('clear-email', 'DashboardController@clearEmailRecord')->name('clearEmailRecord');
    Route::get('send-notification', 'DashboardController@sendNotification')->name('sendNotification');
    Route::post('send-notification-process', 'DashboardController@sendNotificationProcess')->name('sendNotificationProcess');
    Route::post('send-email-process', 'DashboardController@sendEmailProcess')->name('sendEmailProcess');

    //landing setting
    Route::get('landing-settings', 'LandingController@landingSettings')->name('landingSettings');
    Route::post('update-landing-settings', 'LandingController@updateLandingSettings')->name('updateLandingSettings');
    Route::post('update-pexer-feature', 'LandingController@updatePexerFeature')->name('updatePexerFeature');
    Route::post('delete-pexer-feature', 'LandingController@pexerFeatureDelete')->name('pexerFeatureDelete');
    Route::get('subscribers', 'LandingController@subscribers')->name('subscribers');

    //testimonial
    Route::get('testimonial-list', 'LandingController@adminTestimonialList')->name('adminTestimonialList');
    Route::get('testimonial-add', 'LandingController@adminTestimonialAdd')->name('adminTestimonialAdd');
    Route::post('testimonial-save', 'LandingController@adminTestimonialSave')->name('adminTestimonialSave');
    Route::get('testimonial-edit-{id}', 'LandingController@adminTestimonialEdit')->name('adminTestimonialEdit');
    Route::get('testimonial-delete-{id}', 'LandingController@adminTestimonialDelete')->name('adminTestimonialDelete');

    // marketplace
    Route::group(['namespace'=>'marketplace','middleware'=> []],function () {
        Route::get('user-trade-profile-{id}', 'MarketplaceController@userTradeProfile')->name('userTradingProfile');

        Route::get('payment-method-list', 'PaymentMethodController@paymentMethodList')->name('paymentMethodList');
        Route::get('add-payment-method', 'PaymentMethodController@addPaymentMethod')->name('addPaymentMethod');
        Route::get('edit-payment-method/{id}', 'PaymentMethodController@editPaymentMethod')->name('editPaymentMethod');
        Route::post('payment-method-save-process', 'PaymentMethodController@paymentMethodSave')->name('paymentMethodSave');
        Route::post('payment-method-status-change', 'PaymentMethodController@paymentMethodStatusChange')->name('paymentMethodStatusChange');

        Route::get('offer-list-{type}', 'MarketplaceController@offerList')->name('offerList');
        Route::get('offer-details-{id}-{type}', 'MarketplaceController@offerDetails')->name('offerDetails');
        Route::get('order-list', 'MarketplaceController@orderList')->name('orderList');
        Route::get('order-details/{id}', 'MarketplaceController@orderDetails')->name('orderDetails');
        Route::get('order-dispute-list', 'MarketplaceController@orderDisputeList')->name('orderDisputeList');
        Route::get('order-disputes/{id}', 'MarketplaceController@orderDisputeDetails')->name('orderDisputeDetails');

        Route::get('admin-refund-escrow/{id}', 'MarketplaceController@adminRefundEscrow')->name('adminRefundEscrow');
        Route::get('admin-release-escrow/{id}', 'MarketplaceController@adminReleaseEscrow')->name('adminReleaseEscrow');
    });

});
