CREATE TABLE `users`(
    `f_name` varchar(30) NOT NULL,
    `l_name` varchar(30) NOT NULL,
    `full_name` varchar(50) NOT NULL,
    `user_id` int(30) NOT NULL,
    `department` varchar(40) NOT NULL,
    `address` varchar(50) NOT NULL,
    `phone_no` int(20) NOT NULL,
    `user_email` varchar(30) NOT NULL,
    `user_id_image` varchar(50) NOT NULL,
    `user_image` varchar(50) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;










CREATE TABLE `campaigns`(
    `campaign_id` int(30) NOT NULL AUTO_INCREMENT,
    `campaigner_id` int(30) NOT NULL,
    `campaigner_email` varchar(50) NOT NULL,
    `campaigner_phone` int(30) NOT NULL,
    `campaign_description` varchar(200) NOT NULL,
    `campaigner_address` varchar(50) NOT NULL,
    `targeted_amount` int(20) NOT NULL,
    `campaign_file` varchar(50) NOT NULL,
    `campaigner_department` varchar(50) NOT NULL,
    `campaign_start_date` timestamp NULL DEFAULT NULL,
    `campaign_status` int(5) NOT NULL,
    -- `donation_id` int(5) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;









CREATE TABLE `donations`(
    `donation_id` int(30) NOT NULL AUTO_INCREMENT,
    `campaign_id` varchar(50) NOT NULL,
    `doner_id` int(30) NOT NULL,
    `donee_id` int(50) NOT NULL,
    `amount` int(60) NOT NULL,
    `transaction_id` varchar(50) NOT NULL,
    `donation_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;







CREATE TABLE `admin`(
    `admin_id` int(30) NOT NULL AUTO_INCREMENT,
    `admin_name` varchar(50) NOT NULL,
    `doner_id` int(30) NOT NULL,
    `donee_id` int(50) NOT NULL,
    `amount` int(60) NOT NULL,
    `transaction_id` varchar(50) NOT NULL,
    `donation_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;