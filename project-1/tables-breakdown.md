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
- average_size_id - Foreign Key referencing size table
- description
- maintenance_id - Foreign Key referencing maintenance table

# Pet Table
- pet_id - Primary Key
- pet_name
- breed_id - Foreign Key referencing Breeds table
- pet_price
- pet_age
- gender_id - Foreign Key referencing gender table
- pet_date_of_birth
- pet_health_information

# Gender Table
- gender_id - Primary Key
- gender_name

# Avg_size Table
- avg_size_id - Primary Key
- avg_size_name

# Maintenance Table
- maintenance_id - Primary Key
- maintenance_name

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
