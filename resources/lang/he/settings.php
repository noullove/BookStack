<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'הגדרות',
    'settings_save' => 'שמור הגדרות',
    'settings_save_success' => 'ההגדרות נשמרו',

    // App Settings
    'app_customization' => 'התאמה אישית',
    'app_features_security' => 'מאפיינים ואבטחה',
    'app_name' => 'שם היישום',
    'app_name_desc' => 'השם הזה יופיע בכותרת ובכל אי-מייל הנשלח מהמערכת',
    'app_name_header' => 'הצג שם בחלק העליון',
    'app_public_access' => 'גישה ציבורית',
    'app_public_access_desc' => 'הפעלת אפשרות זו תאפשר למשתמשים אשר אינם רשומים לגשת לתוכן שלך',
    'app_public_access_desc_guest' => 'הגדרות הרשאה למשתמשים ציבוריים ניתנות לשינוי דרך משתמש מסוג ״אורח״',
    'app_public_access_toggle' => 'אפשר גישה ציבורית',
    'app_public_viewing' => 'לאפשר גישה ציבורית?',
    'app_secure_images' => 'העלאת תמונות מאובטחת',
    'app_secure_images_toggle' => 'אפשר העלאת תמונות מאובטחת',
    'app_secure_images_desc' => 'משיקולי ביצועים, כל התמונות הינן ציבוריות. אפשרות זו מוסיפה מחרוזת אקראית שקשה לנחש לכל כתובת של תמונה. אנא ודא שאפשרות הצגת תוכן התיקייה מבוטל.',
    'app_editor' => 'עורך הדפים',
    'app_editor_desc' => 'בחר באמצעות איזה עורך תתבצע עריכת הדפים',
    'app_custom_html' => 'HTML מותאם אישית לחלק העליון',
    'app_custom_html_desc' => 'כל קוד שיתווסף כאן, יופיע בתחתית תגית ה head של כל דף. חלק זה שימושי על מנת להגדיר עיצובי CSS והתקנת קוד Analytics',
    'app_custom_html_disabled_notice' => 'קוד HTML מותאם מבוטל בדף ההגדרות על מנת לוודא ששינויים שגורמים לבעיה יוכלו להיות מבוטלים לאחר מכן',
    'app_logo' => 'לוגו היישום',
    'app_logo_desc' => 'תמונה זו צריכה להיות בגובה 43 פיקסלים. תמונות גדולות יותר יוקטנו.',
    'app_primary_color' => 'צבע עיקרי ליישום',
    'app_primary_color_desc' => 'ערך זה צריך להיות מסוג hex. <br> יש להשאיר ריק לשימוש בצבע ברירת המחדל',
    'app_homepage' => 'דף הבית של היישום',
    'app_homepage_desc' => 'אנא בחר דף להצגה בדף הבית במקום דף ברירת המחדל. הרשאות הדף לא יחולו בדפים הנבחרים.',
    'app_homepage_select' => 'בחר דף',
    'app_disable_comments' => 'ביטול תגובות',
    'app_disable_comments_toggle' => 'בטל תגובות',
    'app_disable_comments_desc' => 'מבטל את התגובות לאורך כל היישום, תגובות קיימות לא יוצגו.',

    // Color settings
    'content_colors' => 'Content Colors',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Book Color',
    'chapter_color' => 'Chapter Color',
    'page_color' => 'Page Color',
    'page_draft_color' => 'Page Draft Color',

    // Registration Settings
    'reg_settings' => 'הרשמה',
    'reg_enable' => 'אפשר הרשמה',
    'reg_enable_toggle' => 'אפשר להרשם',
    'reg_enable_desc' => 'כאשר אפשר להרשם משתמשים יוכלו להכנס באופן עצמאי. בעת ההרשמה המשתמש יקבל הרשאה יחידה כברירת מחדל.',
    'reg_default_role' => 'הרשאה כברירת מחדל',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'אימות כתובת אי-מייל',
    'reg_email_confirmation_toggle' => 'יש לאמת את כתובת המייל',
    'reg_confirm_email_desc' => 'אם מופעלת הגבלה לדומיין ספציפי אז אימות המייל לא יבוצע',
    'reg_confirm_restrict_domain' => 'הגבלה לדומיין ספציפי',
    'reg_confirm_restrict_domain_desc' => 'הכנס דומיינים מופרדים בפסיק אשר עבורם תוגבל ההרשמה. משתמשים יקבלו אי-מייל על מנת לאמת את כתובת המייל שלהם. <br> לתשומת לבך: משתמש יוכל לשנות את כתובת המייל שלו לאחר ההרשמה',
    'reg_confirm_restrict_domain_placeholder' => 'אין הגבלה לדומיין',

    // Maintenance settings
    'maint' => 'תחזוקה',
    'maint_image_cleanup' => 'ניקוי תמונות',
    'maint_image_cleanup_desc' => "סורק את הדפים והגרסאות על מנת למצוא אילו תמונות לא בשימוש. יש לוודא גיבוי מלא של מסד הנתונים והתמונות לפני הרצה",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'הפעל ניקוי תמונות',
    'maint_image_cleanup_warning' => 'נמצאו כ :count תמונות אשר לא בשימוש האם ברצונך להמשיך?',
    'maint_image_cleanup_success' => ':count תמונות שלא בשימוש נמחקו',
    'maint_image_cleanup_nothing_found' => 'לא נמצאו תמונות אשר לא בשימוש, לא נמחקו קבצים כלל.',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'תפקידים',
    'role_user_roles' => 'תפקידי משתמשים',
    'role_create' => 'צור תפקיד משתמש חדש',
    'role_create_success' => 'התפקיד נוצר בהצלחה',
    'role_delete' => 'מחק תפקיד',
    'role_delete_confirm' => 'פעולה זו תמחק את התפקיד: :roleName',
    'role_delete_users_assigned' => 'לתפקיד :userCount יש משתמשים אשר משויכים אליו. אם ברצונך להעבירם לתפקיד אחר אנא בחר תפקיד מלמטה',
    'role_delete_no_migration' => "אל תעביר משתמשים לתפקיד",
    'role_delete_sure' => 'האם אתה בטוח שברצונך למחוק את התפקיד?',
    'role_delete_success' => 'התפקיד נמחק בהצלחה',
    'role_edit' => 'ערוך תפקיד',
    'role_details' => 'פרטי תפקיד',
    'role_name' => 'שם התפקיד',
    'role_desc' => 'תיאור קצר של התפקיד',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'הרשאות מערכת',
    'role_manage_users' => 'ניהול משתמשים',
    'role_manage_roles' => 'ניהול תפקידים והרשאות תפקידים',
    'role_manage_entity_permissions' => 'נהל הרשאות ספרים, פרקים ודפים',
    'role_manage_own_entity_permissions' => 'נהל הרשאות על ספרים, פרקים ודפים בבעלותך',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'ניהול הגדרות יישום',
    'role_asset' => 'הרשאות משאבים',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'הרשאות אלו שולטות בגישת ברירת המחדל למשאבים בתוך המערכת. הרשאות של ספרים, פרקים ודפים יגברו על הרשאות אלו.',
    'role_asset_admins' => 'מנהלים מקבלים הרשאה מלאה לכל התוכן אך אפשרויות אלו עלולות להציג או להסתיר אפשרויות בממשק',
    'role_all' => 'הכל',
    'role_own' => 'שלי',
    'role_controlled_by_asset' => 'נשלטים על ידי המשאב אליו הועלו',
    'role_save' => 'שמור תפקיד',
    'role_update_success' => 'התפקיד עודכן בהצלחה',
    'role_users' => 'משתמשים משוייכים לתפקיד זה',
    'role_users_none' => 'אין משתמשים המשוייכים לתפקיד זה',

    // Users
    'users' => 'משתמשים',
    'user_profile' => 'פרופיל משתמש',
    'users_add_new' => 'הוסף משתמש חדש',
    'users_search' => 'חפש משתמשים',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'פרטי משתמש',
    'users_details_desc' => 'הגדר שם לתצוגה ומייל עבור משתמש זה. כתובת המייל תשמש על מנת להתחבר למערכת',
    'users_details_desc_no_email' => 'הגדר שם לתצוגה כדי שאחרים יוכלו לזהות',
    'users_role' => 'תפקידי משתמשים',
    'users_role_desc' => 'בחר אילו תפקידים ישויכו למשתמש זה. אם המשתמש משוייך למספר תפקידים, ההרשאות יהיו כלל ההרשאות של כל התפקידים',
    'users_password' => 'סיסמא',
    'users_password_desc' => 'הגדר סיסמא עבור גישה למערכת. על הסיסמא להיות באורך של 5 תווים לפחות',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'זיהוי חיצוני - ID',
    'users_external_auth_id_desc' => 'זיהוי זה יהיה בשימוש מול מערכת ה LDAP שלך',
    'users_password_warning' => 'יש למלא רק אם ברצונך לשנות את הסיסמא.',
    'users_system_public' => 'משתמש זה מייצג את כל האורחים שלא מזוהים אשר משתמשים במערכת. לא ניתן להתחבר למשתמש זה אך הוא מוגדר כברירת מחדל',
    'users_delete' => 'מחק משתמש',
    'users_delete_named' => 'מחק משתמש :userName',
    'users_delete_warning' => 'פעולה זו תמחק את המשתמש \':userName\' מהמערכת',
    'users_delete_confirm' => 'האם ברצונך למחוק משתמש זה?',
    'users_delete_success' => 'המשתמש נמחק בהצלחה',
    'users_edit' => 'עריכת משתמש',
    'users_edit_profile' => 'עריכת פרופיל',
    'users_edit_success' => 'המשתמש עודכן בהצלחה',
    'users_avatar' => 'תמונת משתמש',
    'users_avatar_desc' => 'בחר תמונה אשר תייצג את המשתמש. על התמונה להיות ריבוע של 256px',
    'users_preferred_language' => 'שפה מועדפת',
    'users_preferred_language_desc' => 'אפשרות זו תשנע את השפה אשר מוצגת בממשק המערכת. פעולה זו לא תשנה את התוכן אשר נכתב על ידי המשתמשים.',
    'users_social_accounts' => 'רשתות חברתיות',
    'users_social_accounts_info' => 'כן ניתן לשייך חשבונות אחרים שלך לחיבור וזיהוי קל ומהיר. ניתוק חשבון אינו מנתק גישה קיימת למערכת. לביצוע ניתוק יש לשנות את ההגדרה בהגדרות של חשבון הרשת החברתית',
    'users_social_connect' => 'חיבור החשבון',
    'users_social_disconnect' => 'ניתוק חשבון',
    'users_social_connected' => 'חשבון :socialAccount חובר בהצלחה לחשבון שלך',
    'users_social_disconnected' => ':socialAccount נותק בהצלחה מהחשבון שלך',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
