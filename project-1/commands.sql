-- Create database gender
CREATE TABLE `Aleksandra14_pet_store`.`gender` (`gender_id` INT NOT NULL AUTO_INCREMENT , `gender_name` VARCHAR(256) NOT NULL , PRIMARY KEY (`gender_id`)) ENGINE = InnoDB;

-- Create database avg_size
CREATE TABLE `Aleksandra14_pet_store`.`avg_size` (`avg_size_id` INT NOT NULL AUTO_INCREMENT , `avg_size_name` VARCHAR(256) NOT NULL , PRIMARY KEY (`avg_size_id`)) ENGINE = InnoDB;

-- Create database maintenance
CREATE TABLE `Aleksandra14_pet_store`.`maintenance` (`maintenance_id` INT NOT NULL AUTO_INCREMENT , `maintenance_name` VARCHAR(256) NOT NULL , PRIMARY KEY (`maintenance_id`)) ENGINE = InnoDB;

-- Create database species
CREATE TABLE `Aleksandra14_pet_store`.`species` (`species_id` INT NOT NULL AUTO_INCREMENT , `species_name` VARCHAR(256) NOT NULL , `species_avg_lifespan` VARCHAR(256) NOT NULL , `species_description` VARCHAR(256) NOT NULL , PRIMARY KEY (`species_id`)) ENGINE = InnoDB;

-- Create database breeds
CREATE TABLE `Aleksandra14_pet_store`.`breeds` (`breed_id` INT NOT NULL AUTO_INCREMENT , `breed_name` VARCHAR(256) NOT NULL , `species_id` INT NOT NULL , `avg_size_id` INT NOT NULL , `breed_description` VARCHAR(1200) NOT NULL , `maintenance_id` INT NOT NULL , PRIMARY KEY (`breed_id`)) ENGINE = InnoDB;

-- Add foreign key constraints - species_id, avg_size_id, maintenance_id
ALTER TABLE `breeds` ADD CONSTRAINT `species_id` FOREIGN KEY (`species_id`) REFERENCES `species`(`species_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `breeds` ADD CONSTRAINT `avg_size_id` FOREIGN KEY (`avg_size_id`) REFERENCES `avg_size`(`avg_size_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `breeds` ADD CONSTRAINT `maintenance_id` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenance`(`maintenance_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Create database pets
CREATE TABLE `Aleksandra14_pet_store`.`pets` (`pet_id` INT NOT NULL AUTO_INCREMENT , `pet_name` VARCHAR(256) NOT NULL , `breed_id` INT NOT NULL , `pet_price` INT NOT NULL , `pet_age` INT NOT NULL , `gender_id` INT NOT NULL , `pet_dob` DATE NOT NULL , `pet_health_info` VARCHAR(1200) NOT NULL , PRIMARY KEY (`pet_id`)) ENGINE = InnoDB;

-- Add foreign key constraints - breed_id and gender_id
ALTER TABLE `pets` ADD CONSTRAINT `breed_id` FOREIGN KEY (`breed_id`) REFERENCES `breeds`(`breed_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `pets` ADD CONSTRAINT `gender` FOREIGN KEY (`gender_id`) REFERENCES `gender`(`gender_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Create database toys
CREATE TABLE `Aleksandra14_pet_store`.`toys` (`toy_id` INT NOT NULL AUTO_INCREMENT , `toy_name` VARCHAR(256) NOT NULL , `toy_price` INT NOT NULL , `toy_description` VARCHAR(256) NOT NULL , `toy_amount` INT NOT NULL , PRIMARY KEY (`toy_id`)) ENGINE = InnoDB;

-- Create database toy_species
CREATE TABLE `Aleksandra14_pet_store`.`toy_species` (`toy_species_id` INT NOT NULL AUTO_INCREMENT , `species_id` INT NOT NULL , `toy_id` INT NOT NULL , PRIMARY KEY (`toy_species_id`)) ENGINE = InnoDB;

-- Add foreign key constraints - species_id and toy_id
ALTER TABLE `toy_species` ADD CONSTRAINT `species` FOREIGN KEY (`species_id`) REFERENCES `species`(`species_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `toy_species` ADD CONSTRAINT `toy_id` FOREIGN KEY (`toy_id`) REFERENCES `toys`(`toy_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Insert data into table maintenance
INSERT INTO `maintenance` (`maintenance_id`, `maintenance_name`) VALUES (NULL, 'High'), (NULL, 'Medium')
INSERT INTO `maintenance` (`maintenance_id`, `maintenance_name`) VALUES (NULL, 'Low')

-- Insert data into table species
INSERT INTO `species` (`species_id`, `species_name`, `species_avg_lifespan`, `species_description`) VALUES (NULL, 'Cat', '12-18 years', 'Cats, small carnivorous mammals known as Felis catus, are agile and independent companions. With diverse breeds and sleek bodies, they\'re skilled groomers and climbers, forming strong bonds with humans. Expressive through vocalizations and body language, cats thrive on a meat-rich diet. Domesticated cats are cherished for their affection and entertainment in households globally.'), (NULL, 'Dog', '10-13 years', 'Dogs, or Canis lupus familiaris, are loyal and diverse companions. With various breeds, they range in size, coat, and temperament. Known for their social nature, dogs form strong bonds with humans, providing loyalty and companionship. As omnivores, they thrive on a balanced diet. Dogs enrich households worldwide with their affection and versatility.');

-- Insert data into table avg_size
INSERT INTO `avg_size` (`avg_size_id`, `avg_size_name`) VALUES (NULL, 'Small'), (NULL, 'Medium');
INSERT INTO `avg_size` (`avg_size_id`, `avg_size_name`) VALUES (NULL, 'Large');

-- Insert data into table gender
INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES (NULL, 'Male (not neutered)'), (NULL, 'Female (not neutered)')
INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES (NULL, 'Male (neutered)'), (NULL, 'Female (neutered)')

-- Insert data into table breeds
INSERT INTO `breeds` (`breed_id`, `species_id`, `breed_name`, `avg_size_id`, `breed_description`, `maintenance_id`) VALUES (NULL, '1', 'Persian', '2', 'Persian cats are known for their long, luxurious fur and distinctive flat face. They are calm and affectionate, requiring regular grooming to maintain their coat.', '2'), (NULL, '1', 'Siamese', '1', 'Siamese cats are sleek and vocal, with striking blue almond-shaped eyes. They are social and enjoy interacting with their owners. Regular play and mental stimulation are essential.', '3')
INSERT INTO `breeds` (`breed_id`, `species_id`, `breed_name`, `avg_size_id`, `breed_description`, `maintenance_id`) VALUES (NULL, '2', 'Labrador Retriever', '3', 'Labrador Retrievers are friendly and outgoing. Known for their intelligence and versatility, they make excellent family pets. Regular exercise and mental stimulation are crucial for their well-being.', '2'), (NULL, '2', 'Dachshund', '1', 'Dachshunds are small, long-bodied dogs with a bold personality. They are playful and have a keen sense of smell. Regular walks and attention to their unique back health needs are essential.', '3')

-- Insert data into table pets
INSERT INTO `pets` (`pet_id`, `pet_name`, `breed_id`, `pet_price`, `pet_age`, `gender_id`, `pet_dob`, `pet_health_info`) VALUES (NULL, 'Fluffy', '1', '500', '2', '4', '2020-05-15', 'Fluffy is a healthy Persian cat with a beautiful long coat. Regular grooming and a balanced diet contribute to her well-being.'), (NULL, 'Max', '3', '850', '1', '1', '2022-02-20', 'Max is a lively Labrador Retriever with a friendly disposition. He enjoys outdoor activities and has regular veterinary check-ups.')
INSERT INTO `pets` (`pet_id`, `pet_name`, `breed_id`, `pet_price`, `pet_age`, `gender_id`, `pet_dob`, `pet_health_info`) VALUES (NULL, 'Luna', '2', '420', '1', '2', '2022-08-10', 'Luna is an active and vocal Siamese cat. She thrives on interactive play and has a sleek coat. Regular vet visits ensure her overall health.'), (NULL, 'Charlie', '4', '600', '4', '3', '2019-03-05', 'Charlie is a playful Dachshund with a bold personality. Due to his unique body shape, he benefits from regular exercise and attention to his back health.')

-- Insert data into table toys
INSERT INTO `toys` (`toy_id`, `toy_name`, `toy_price`, `toy_description`, `toy_amount`) VALUES (NULL, 'Feather Wand', '10', 'Engage your feline friend with this interactive feather wand. The feathers mimic prey, providing mental and physical stimulation for your cat. Perfect for playtime bonding.', '50'), (NULL, 'Chew Bone', '25', 'Satisfy your dog\'s natural chewing instincts with this durable rubber chew bone. It promotes dental health and alleviates boredom. Suitable for medium to large breeds.', '25'), (NULL, 'Laser Pointer', '13', 'Keep your cat entertained for hours with this laser pointer. Watch them chase the elusive dot, providing exercise and mental stimulation. Great for indoor play.', '24'), (NULL, 'Plush Squirrel', '18', 'Treat your dog to a cuddly companion with this squeaky plush squirrel. The squeaker adds excitement, and the soft texture provides comfort. Suitable for small to medium dogs.', '12')

-- Insert data into table toy_species
INSERT INTO `toy_species` (`toy_species_id`, `species_id`, `toy_id`) VALUES (NULL, '1', '1'), (NULL, '1', '3'), (NULL, '2', '2'), (NULL, '2', '4')

-- Show all pet info
SELECT pets.*, breeds.breed_name, species.species_name, gender.gender_name, maintenance.maintenance_name
FROM pets
NATURAL JOIN breeds
NATURAL JOIN species
NATURAL JOIN gender
NATURAL JOIN maintenance;

-- Show all info with pet, breed, species
SELECT *
FROM pets
NATURAL JOIN breeds
NATURAL JOIN species
NATURAL JOIN gender
NATURAL JOIN maintenance;

-- Toy species association with species info
SELECT *
FROM toys
NATURAL JOIN toy_species
NATURAL JOIN species

-- Show all info with pet, breed, species for cats
SELECT *
FROM pets
NATURAL JOIN breeds
NATURAL JOIN species
NATURAL JOIN gender
NATURAL JOIN maintenance
WHERE species.species_name = 'Cat';

-- Show all info with pet, breed, species where price is more than 500
SELECT *
FROM pets
NATURAL JOIN breeds
NATURAL JOIN species
NATURAL JOIN gender
NATURAL JOIN maintenance
WHERE pet_price > 500;