CREATE TABLE `Aleksandra14_pet_store`.`species` (`species_id` INT NOT NULL AUTO_INCREMENT , `species_name` VARCHAR(256) NOT NULL , `species_avg_lifespan` VARCHAR(256) NOT NULL , `species_description` VARCHAR(256) NOT NULL , PRIMARY KEY (`species_id`)) ENGINE = InnoDB;

-- not sure about breed_avg_size type - int or varchar?

CREATE TABLE `Aleksandra14_pet_store`.`breeds` (`breed_id` INT NOT NULL AUTO_INCREMENT , `breed_name` VARCHAR(256) NOT NULL , `species_id` INT NOT NULL , `breed_avg_size` INT NOT NULL , `breed_description` VARCHAR(1200) NOT NULL , `breed_maintenance` VARCHAR(256) NOT NULL , PRIMARY KEY (`breed_id`)) ENGINE = InnoDB;

ALTER TABLE `breeds` ADD CONSTRAINT `species_id` FOREIGN KEY (`species_id`) REFERENCES `species`(`species_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE `Aleksandra14_pet_store`.`pets` (`pet_id` INT NOT NULL AUTO_INCREMENT , `pet_name` VARCHAR(256) NOT NULL , `breed_id` INT NOT NULL , `pet_price` INT NOT NULL , `pet_age` INT NOT NULL , `pet_gender` VARCHAR(256) NOT NULL , `pet_dob` DATE NOT NULL , `pet_health_info` VARCHAR(1200) NOT NULL , PRIMARY KEY (`pet_id`)) ENGINE = InnoDB;

ALTER TABLE `pets` ADD CONSTRAINT `breed_id` FOREIGN KEY (`breed_id`) REFERENCES `breeds`(`breed_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE `Aleksandra14_pet_store`.`toys` (`toy_id` INT NOT NULL AUTO_INCREMENT , `toy_name` VARCHAR(256) NOT NULL , `toy_price` INT NOT NULL , `toy_description` VARCHAR(256) NOT NULL , `toy_amount` INT NOT NULL , PRIMARY KEY (`toy_id`)) ENGINE = InnoDB;

-- CREATE TABLE `Aleksandra14_pet_store`.`toy_species` (`toy_species_id` INT NOT NULL AUTO_INCREMENT , `toy_id` INT NOT NULL , `species_id` INT NOT NULL , PRIMARY KEY (`toy_species_id`)) ENGINE = InnoDB;

-- ALTER TABLE `toy_species` ADD CONSTRAINT `toy_id` FOREIGN KEY (`toy_id`) REFERENCES `toys`(`toy_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `toy_species` ADD CONSTRAINT `species_id` FOREIGN KEY (`species_id`) REFERENCES `species`(`species_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE `Aleksandra14_pet_store`.`toy_species` (`toy_species_id` INT NOT NULL AUTO_INCREMENT , `species_id` INT NOT NULL , `toy_id` INT NOT NULL , PRIMARY KEY (`toy_species_id`)) ENGINE = InnoDB;

ALTER TABLE `toy_species` ADD CONSTRAINT `species_id` FOREIGN KEY (`species_id`) REFERENCES `species`(`species_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `toy_species` ADD CONSTRAINT `toy_id` FOREIGN KEY (`toy_id`) REFERENCES `toys`(`toy_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;