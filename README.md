# How to use the system
System for managing car data.

# Content types
The main content type used is "Car data" which contains fields about a car's model, manufacturer and the kilometres driven.
 
# Paragraph type
The paragraph type used in the system is "Model data" that is used in the content type "Car data" to store data about model and manufacturer regarding a particular car.

# Taxonomy terms
The used taxonomy vocabularies are "Manufacturers" and "Models" and both of them are used in the webform "Car records" and content type "Car data":
    - "Manufacturers" taxonomy contains predefined list with some car manufacturers and their years of founding as child nodes.
    - "Models" taxonomy contains predefined list with some car models.

# Navigation menu
The menu contains two links:
    - Link "Home" that leads to the "Carspage" view.
    - Link "Webform items" that leads to "Webform view".

# Views
The views that are used for displaying the content are "Carspage" and "Webform view":   
    - "Carspage" serves as home page and is used to display the created objects by the content type "Car data". Also on the page are displayed block views for Categories "Manufacturers", "Models" and for "Recently added objects".
    - "Webform view" that implements the webform "Car records" and displays the webform submissions.

# Webform
The created webform named "Car records" contains similar to the content type "Car data" fields and has its contents displayed in the "Webform view" page.

# Theme
The website uses the theme "Gin 8.x-3.0-alpha32".

# Custom module
The website contains a custom module that allows displaying of a particular content only in the footer bar.