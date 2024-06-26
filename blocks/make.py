import os
import json

def main():
    # Prompt user for input
    block_name = input("Enter block name: ")
    block_title = input("Enter block title: ")
    block_description = input("Enter block description: ")
    block_icon = input("Enter block icon code: ")
    block_keywords = input("Enter block keywords (comma separated): ").split(',')

    # Trim spaces from keywords
    block_keywords = [keyword.strip() for keyword in block_keywords]

    # Create directory with block name
    os.makedirs(block_name, exist_ok=True)

    # Create .php and .css files
    open(os.path.join(block_name, f"{block_name}.php"), 'w').close()
    open(os.path.join(block_name, f"{block_name}.css"), 'w').close()

    # Create block.JSON with the specified contents
    block_data = {
        "name": f"acf/{block_name}",
        "title": block_title,
        "description": block_description,
        "style": [f"file:./{block_name}.css"],
        "icon": block_icon,
        "keywords": block_keywords,
        "acf": {
            "mode": "edit",
            "renderTemplate": f"{block_name}.php"
        },
        "align": "full"
    }

    with open(os.path.join(block_name, "block.json"), 'w') as json_file:
        json.dump(block_data, json_file, indent=4)

    print(f"Directory and files for '{block_name}' created successfully!")

if __name__ == "__main__":
    main()