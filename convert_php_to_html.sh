#!/bin/bash

root_dir="."

find "$root_dir" -type f -name "*.php" | while read -r php_file; do
    html_file="${php_file%.php}.html"
    php_dir="$(dirname "$php_file")"
    php_base="$(basename "$php_file")"
    # Execute the PHP file from its own directory
    html_content=$(cd "$php_dir" && php "$php_base")
    # Replace .php with .html only in href/src attributes
    html_content=$(echo "$html_content" | sed -E 's/(href|src)="([^"]+)\.php"/\1="\2.html"/g')
    echo "$html_content" > "$html_file"
    echo "Converted $php_file to $html_file"
done