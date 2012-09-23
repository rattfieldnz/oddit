<?php
$maxSize = ini_get('upload_max_filesize');
$maxSize = str_replace('M', '', $maxSize);

if (!get_option('filter_1')) add_option('filter_1', 'Full-time', '', 'yes');
if (!get_option('filter_2')) add_option('filter_2', 'Freelance', '', 'yes');
if (!get_option('filter_3')) add_option('filter_3', 'Contract', '', 'yes');
if (!get_option('9t5_categorybar')) add_option('9t5_categorybar', 'Enabled', '', 'yes');
if (!get_option('9t5_filterbar')) add_option('9t5_filterbar', 'Tabs', '', 'yes');
if (!get_option('9t5_logo')) add_option('9t5_logo', '', '', 'yes');
if (!get_option('9t5_favicon')) add_option('9t5_favicon', home_url() . '/favicon.ico', '', 'yes');
if (!get_option('9t5_wp_login')) add_option('9t5_wp_login', '', '', 'yes');
if (!get_option('9t5_scheme')) add_option('9t5_scheme', 'Light', '', 'yes');
if (!get_option('9t5_typography')) add_option('9t5_typography', 'Sans Serif', '', 'yes');
if (!get_option('9t5_background_color')) add_option('9t5_background_color', '', '', 'yes');
if (!get_option('9t5_background_image')) add_option('9t5_background_image', '', '', 'yes');
if (!get_option('9t5_background_repeat')) add_option('9t5_background_repeat', 'repeat-x', '', 'yes');
if (!get_option('9t5_color_categories')) add_option('9t5_color_categories', 'black', '', 'yes');
if (!get_option('9t5_color_primary')) add_option('9t5_color_primary', 'grey', '', 'yes');
if (!get_option('9t5_color_secondary')) add_option('9t5_color_secondary', 'red', '', 'yes');
if (!get_option('9t5_color_tertiary')) add_option('9t5_color_tertiary', 'white', '', 'yes');
if (!get_option('9t5_color_button')) add_option('9t5_color_button', 'red', '', 'yes');
if (!get_option('9t5_wid_search')) add_option('9t5_wid_search', 'Enabled', '', 'yes');
if (!get_option('9t5_search_all')) add_option('9t5_search_all', 'Enabled', '', 'yes');
if (!get_option('9t5_categories')) add_option('9t5_categories', 'Enabled', '', 'yes');
if (!get_option('9t5_category_number')) add_option('9t5_category_number', '15', '', 'yes');
if (!get_option('9t5_tags')) add_option('9t5_tags', 'Enabled', '', 'yes');
if (!get_option('9t5_tag_number')) add_option('9t5_tag_number', '15', '', 'yes');
if (!get_option('9t5_wid_add')) add_option('9t5_wid_add', 'Enabled', '', 'yes');
if (!get_option('9t5_button_text')) add_option('9t5_button_text', 'Post a job', '', 'yes');
if (!get_option('9t5_job_post_page')) add_option('9t5_job_post_page', '', '', 'yes');
if (!get_option('9t5_caption_text')) add_option('9t5_caption_text', 'Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.', '', 'yes');
if (!get_option('9t5_wid_about')) add_option('9t5_wid_about', 'Enabled', '', 'yes');
if (!get_option('9t5_wid_about_text')) add_option('9t5_wid_about_text', 'Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.', '', 'yes');
if (!get_option('9t5_ad_enabled')) add_option('9t5_ad_enabled', 'Enabled', '', 'yes');
if (!get_option('9t5_ad_code')) add_option('9t5_ad_code', '<a href=\"#ad\"><img src=\"' . get_template_directory_uri() . '/images/sample.ad.gif\" /></a><p>Donec congue lacinia dui, a porttitor lectus condimentum laoreet nunc eu corper.</p>', '', 'yes');
if (!get_option('9t5_wid_order')) add_option('9t5_wid_order', '2,1,3,4,5', '', 'yes');
if (!get_option('9t5_copy_notice')) add_option('9t5_copy_notice', '', '', 'yes');
if (!get_option('9t5_seo')) add_option('9t5_seo', '', '', 'yes');
if (!get_option('9t5_analytics')) add_option('9t5_analytics', '', '', 'yes');
if (!get_option('9t5_max_skills')) add_option('9t5_max_skills', '10', '', 'yes');
if (!get_option('9t5_location_anywhere')) add_option('9t5_location_anywhere', 'Yes', '', 'yes');
if (!get_option('9t5_anon_company')) add_option('9t5_anon_company', 'Yes', '', 'yes');
if (!get_option('9t5_noexpire')) add_option('9t5_noexpire', 'Yes', '', 'yes');
if (!get_option('9t5_custom_rss')) add_option('9t5_custom_rss', home_url() . '/feed/', '', 'yes');
if (!get_option('9t5_safe_emails')) add_option('9t5_safe_emails', 'Enabled', '', 'yes');
if (!get_option('9t5_new_days')) add_option('9t5_new_days', '7', '', 'yes');
if (!get_option('9t5_share_job')) add_option('9t5_share_job', 'Enabled', '', 'yes');
if (!get_option('9t5_share_blog')) add_option('9t5_share_blog', 'Enabled', '', 'yes');
if (!get_option('9t5_pp_email')) add_option('9t5_pp_email', '', '', 'yes');
if (!get_option('9t5_pp_cost')) add_option('9t5_pp_cost', '25.00', '', 'yes');
if (!get_option('9t5_pp_image')) add_option('9t5_pp_image', '', '', 'yes');
if (!get_option('9t5_pp_text')) add_option('9t5_pp_text', 'Return to post a job', '', 'yes');
if (!get_option('9t5_link_login')) add_option('9t5_link_login', 'wp-login.php', '', 'yes');
if (!get_option('9t5_link_register')) add_option('9t5_link_register', 'wp-login.php?action=register', '', 'yes');
if (!get_option('9t5_resume_required')) add_option('9t5_resume_required', 'Yes', '', 'yes');
if (!get_option('9t5_filetypes_allowed')) add_option('9t5_filetypes_allowed', 'txt,pdf,doc,zip,rar,7z,tar,tar.gz', '', 'yes');
if (!get_option('9t5_files_maxsize')) add_option('9t5_files_maxsize', $maxSize, '', 'yes');
if (!get_option('9t5_job_salary')) add_option('9t5_job_salary', 'No', '', 'yes');
if (!get_option('9t5_currency')) add_option('9t5_currency', 'USD', '', 'yes');
if (!get_option('9t5_version')) add_option('9t5_version', '6', '', 'yes');
?>