#!/bin/bash

# Directory where PHP files are located
directory="."

# Loop through all PHP files in the directory
for php_file in $directory/*.php; do
    # Create the corresponding HTML filename
    html_file="${php_file%.php}.html"
    
    # Execute the PHP file and get the output
    html_content=$(php "$php_file")
    
    # Replace .php links with .html links
    html_content="${html_content//.php/.html}"
    
    # Save the updated HTML content to the new .html file
    echo "$html_content" > "$html_file"
    
    # Output message
    echo "Converted $php_file to $html_file"
done
