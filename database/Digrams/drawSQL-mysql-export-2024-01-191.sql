CREATE TABLE `doctor_rating`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `users_id` INT UNSIGNED NOT NULL,
    `doctor_id` INT UNSIGNED NOT NULL,
    `rating` BIGINT NOT NULL,
    `rating_type` VARCHAR(255) NOT NULL,
    `rating_status` VARCHAR(255) NOT NULL,
    `rating_time` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `doctor_rating` ADD PRIMARY KEY `doctor_rating_id_primary`(`id`);
CREATE TABLE `Doctor`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `verified` VARCHAR(255) NULL,
    `rememberToken` VARCHAR(255) NOT NULL,
    `image_path` VARCHAR(255) NOT NULL DEFAULT 'profile.png',
    `status` VARCHAR(255) NOT NULL DEFAULT 'active',
    `phone` VARCHAR(255) NULL,
    `speciality` VARCHAR(255) NULL,
    `qualification` VARCHAR(255) NULL,
    `experience` VARCHAR(255) NULL,
    `section_id` INT UNSIGNED NOT NULL
);
ALTER TABLE
    `Doctor` ADD PRIMARY KEY `doctor_id_primary`(`id`);
CREATE TABLE `doctor_section`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `section_name` VARCHAR(255) NOT NULL,
    `section_description` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `doctor_section` ADD PRIMARY KEY `doctor_section_id_primary`(`id`);
CREATE TABLE `patient_appointment`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `users_id` INT UNSIGNED NOT NULL,
    `doctor_appointment_id` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `patient_appointment` ADD PRIMARY KEY `patient_appointment_id_primary`(`id`);
CREATE TABLE `Message`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `sender_id` BIGINT NOT NULL,
    `receiver_id` BIGINT NOT NULL,
    `message` VARCHAR(255) NOT NULL,
    `message_type` VARCHAR(255) NOT NULL,
    `message_status` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Message` ADD PRIMARY KEY `message_id_primary`(`id`);
CREATE TABLE `Admin`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `createdAt` VARCHAR(255) NULL,
    `rememberToken` VARCHAR(255) NULL,
    `image_path` VARCHAR(255) NOT NULL DEFAULT 'profile.png',
    `status` VARCHAR(255) NOT NULL DEFAULT 'active',
    `phone` VARCHAR(255) NULL
);
ALTER TABLE
    `Admin` ADD PRIMARY KEY `admin_id_primary`(`id`);
CREATE TABLE `website_settings`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `website_name` VARCHAR(255) NOT NULL,
    `website_logo` VARCHAR(255) NOT NULL,
    `website_favicon` VARCHAR(255) NOT NULL,
    `website_email` VARCHAR(255) NOT NULL,
    `website_phone` VARCHAR(255) NOT NULL,
    `website_address` VARCHAR(255) NOT NULL,
    `website_facebook` VARCHAR(255) NOT NULL,
    `website_twitter` VARCHAR(255) NOT NULL,
    `website_instagram` VARCHAR(255) NOT NULL,
    `website_youtube` VARCHAR(255) NOT NULL,
    `website_whatsapp` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `website_settings` ADD PRIMARY KEY `website_settings_id_primary`(`id`);
CREATE TABLE `patient_diabetes`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `patient_data_id` INT NOT NULL,
    `diabetes_type` VARCHAR(255) NOT NULL,
    `diabetes_duration` VARCHAR(255) NOT NULL,
    `diabetes_status` VARCHAR(255) NOT NULL,
    `users_id` INT UNSIGNED NOT NULL
);
ALTER TABLE
    `patient_diabetes` ADD PRIMARY KEY `patient_diabetes_id_primary`(`id`);
CREATE TABLE `patient_data`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `users_id` INT UNSIGNED NOT NULL,
    `gender` VARCHAR(255) NOT NULL,
    `age` VARCHAR(255) NOT NULL,
    `hypertension` VARCHAR(255) NOT NULL,
    `heart_disease` VARCHAR(255) NOT NULL,
    `smoking_history` VARCHAR(255) NOT NULL,
    `bmi` VARCHAR(255) NOT NULL,
    `HbA1c_level` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `patient_data` ADD PRIMARY KEY `patient_data_id_primary`(`id`);
CREATE TABLE `Posts`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT UNSIGNED NOT NULL,
    `post_title` VARCHAR(255) NOT NULL,
    `post_description` VARCHAR(255) NOT NULL,
    `post_attachment` VARCHAR(255) NOT NULL,
    `post_type` VARCHAR(255) NOT NULL,
    `post_status` VARCHAR(255) NOT NULL DEFAULT 'active',
    `slug` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Posts` ADD PRIMARY KEY `posts_id_primary`(`id`);
CREATE TABLE `rating_website`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `users_id` INT UNSIGNED NOT NULL,
    `rating` VARCHAR(255) NOT NULL,
    `rating_type` VARCHAR(255) NOT NULL,
    `rating_status` VARCHAR(255) NOT NULL,
    `rating_time` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `rating_website` ADD PRIMARY KEY `rating_website_id_primary`(`id`);
CREATE TABLE `Users`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `verified` VARCHAR(255) NULL,
    `rememberToken` VARCHAR(255) NULL,
    `image_path` VARCHAR(255) NULL DEFAULT 'profile.png',
    `status` VARCHAR(255) NOT NULL DEFAULT 'active',
    `phone` BIGINT NULL
);
ALTER TABLE
    `Users` ADD PRIMARY KEY `users_id_primary`(`id`);
CREATE TABLE `Employee`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `verified` VARCHAR(255) NOT NULL,
    `rememberToken` VARCHAR(255) NOT NULL,
    `image_path` VARCHAR(255) NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `employee_qualification` VARCHAR(255) NOT NULL,
    `employee_experience` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Employee` ADD PRIMARY KEY `employee_id_primary`(`id`);
CREATE TABLE `doctor_appointment`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `doctors_id` BIGINT UNSIGNED NOT NULL,
    `appointment_date` VARCHAR(255) NOT NULL,
    `appointment_time` VARCHAR(255) NOT NULL,
    `appointment_status` VARCHAR(255) NOT NULL DEFAULT 'enable',
    `appointment_type` VARCHAR(255) NOT NULL,
    `appointment_reason` VARCHAR(255) NOT NULL,
    `appointment_description` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `doctor_appointment` ADD PRIMARY KEY `doctor_appointment_id_primary`(`id`);
CREATE TABLE `post_comments`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `users_id` INT UNSIGNED NOT NULL,
    `post_id` INT UNSIGNED NOT NULL,
    `comment` VARCHAR(255) NOT NULL,
    `comment_type` VARCHAR(255) NULL,
    `comment_status` VARCHAR(255) NOT NULL DEFAULT 'active'
);
ALTER TABLE
    `post_comments` ADD PRIMARY KEY `post_comments_id_primary`(`id`);
ALTER TABLE
    `post_comments` ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY(`post_id`) REFERENCES `Posts`(`id`);
ALTER TABLE
    `patient_appointment` ADD CONSTRAINT `patient_appointment_doctor_appointment_id_foreign` FOREIGN KEY(`doctor_appointment_id`) REFERENCES `doctor_appointment`(`id`);
ALTER TABLE
    `post_comments` ADD CONSTRAINT `post_comments_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `doctor_rating` ADD CONSTRAINT `doctor_rating_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `doctor_appointment` ADD CONSTRAINT `doctor_appointment_doctors_id_foreign` FOREIGN KEY(`doctors_id`) REFERENCES `Doctor`(`id`);
ALTER TABLE
    `patient_data` ADD CONSTRAINT `patient_data_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `Posts` ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `Doctor` ADD CONSTRAINT `doctor_section_id_foreign` FOREIGN KEY(`section_id`) REFERENCES `doctor_section`(`id`);
ALTER TABLE
    `rating_website` ADD CONSTRAINT `rating_website_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `doctor_rating` ADD CONSTRAINT `doctor_rating_doctor_id_foreign` FOREIGN KEY(`doctor_id`) REFERENCES `Doctor`(`id`);
ALTER TABLE
    `patient_diabetes` ADD CONSTRAINT `patient_diabetes_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `patient_appointment` ADD CONSTRAINT `patient_appointment_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
