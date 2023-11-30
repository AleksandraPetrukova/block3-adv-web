## Pet Store Table

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
- maintenance

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


Is it better to make toy-species association or toy-pet one?