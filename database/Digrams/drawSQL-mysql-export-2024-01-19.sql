CREATE TABLE `recomented_user_diatary`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `users_id` INT UNSIGNED NOT NULL,
    `recomented_user_id` INT NOT NULL,
    `recomented_user_type` VARCHAR(255) NOT NULL,
    `recomented_user_status` VARCHAR(255) NOT NULL,
    `recomented_user_time` VARCHAR(255) NOT NULL
);
CREATE TABLE `service_details`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `service_id` INT UNSIGNED NOT NULL,
    `service_details_name` VARCHAR(255) NOT NULL,
    `service_details_description` VARCHAR(255) NOT NULL,
    `service_details_attachment` VARCHAR(255) NOT NULL,
    `service_details_status` VARCHAR(255) NOT NULL
);
CREATE TABLE `Users`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` BIGINT NOT NULL,
    `email` BIGINT NOT NULL,
    `password` BIGINT NOT NULL,
    `createdAt` BIGINT NOT NULL,
    `updatedAt` BIGINT NOT NULL,
    `deletedAt` BIGINT NOT NULL,
    `verifiedAt` BIGINT NULL,
    `verified` BIGINT NULL,
    `rememberToken` BIGINT NULL,
    `image_path` BIGINT NULL DEFAULT '' PROFILE.png '',
    `status` BIGINT NOT NULL DEFAULT '' active '',
    `phone` BIGINT NULL
);
CREATE TABLE `notification`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `users_id` INT UNSIGNED NOT NULL,
    `notification_title` VARCHAR(255) NOT NULL,
    `notification_description` VARCHAR(255) NOT NULL,
    `notification_type` VARCHAR(255) NOT NULL,
    `notification_status` VARCHAR(255) NOT NULL,
    `notification_time` VARCHAR(255) NOT NULL,
    `read_status` VARCHAR(255) NOT NULL
);
CREATE TABLE `recomented_user_activity`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `users_id` INT UNSIGNED NOT NULL,
    `recomented_user_id` INT NOT NULL,
    `recomented_user_type` VARCHAR(255) NOT NULL,
    `recomented_user_status` VARCHAR(255) NOT NULL,
    `recomented_user_time` VARCHAR(255) NOT NULL
);
CREATE TABLE `report`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `users_id` INT UNSIGNED NOT NULL,
    `report_title` VARCHAR(255) NOT NULL,
    `report_description` TEXT NOT NULL,
    `report_attachment` VARCHAR(255) NOT NULL,
    `report_type` VARCHAR(255) NOT NULL,
    `report_status` VARCHAR(255) NOT NULL
);
CREATE TABLE `service`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `service_name` VARCHAR(255) NOT NULL,
    `service_description` VARCHAR(255) NOT NULL,
    `service_image` VARCHAR(255) NOT NULL,
    `service_status` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `service_details` ADD CONSTRAINT `service_details_service_id_foreign` FOREIGN KEY(`service_id`) REFERENCES `service`(`id`);
ALTER TABLE
    `report` ADD CONSTRAINT `report_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `recomented_user_activity` ADD CONSTRAINT `recomented_user_activity_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `notification` ADD CONSTRAINT `notification_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
ALTER TABLE
    `recomented_user_diatary` ADD CONSTRAINT `recomented_user_diatary_users_id_foreign` FOREIGN KEY(`users_id`) REFERENCES `Users`(`id`);
