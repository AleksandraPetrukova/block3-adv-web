# Species Table
- species_id - Primary Key
- species_name
- average_lifespan
- description

# Breeds Table
- breed_id - Primary Key
- breed_name
- species_id - Foreign Key referencing Species table
- average_size
- description

# Pet Table
- pet_id - Primary Key
- pet_name
- breed_id - Foreign Key referencing Breeds table
- price
- age
- gender
- date_of_birth
- health_information

*** Question for net two tables: is it better to separate or not
# Toys Table
- toy_id - Primary Key
- toy_name
- toy_price
- description
- amount

# Toy_Species Association Table:
- toy_species_id - Primary Key
- toy_id
- species_id

OR

# Toy_Pet Association Table:

- toy_pet_id - Primary Key
- toy_id
- pet_id

Is it better to make toy-species association or toy-pet one?