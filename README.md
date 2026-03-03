# Quality of Life Utility – File Organizer (PHP CLI Tool)

## The Problem

My Downloads folder (and other working folders) often become cluttered with mixed file types such as images, documents, videos, and compressed files. 

Manually organizing them into separate folders is repetitive and time-consuming. Over time, this reduces productivity and makes files harder to locate.

This tool automates the process of organizing files by categorizing them based on their file extensions.


## The Solution

This PHP CLI utility:

- Scans a specified directory
- Detects file extensions
- Automatically creates categorized folders (if not existing)
- Moves files into their appropriate folders
- Handles invalid directory input safely

Example categories:

- Images (jpg, png, gif)
- Documents (pdf, docx, txt)
- Videos (mp4, mkv)
- Music (mp3)
- Archives (zip, rar)



## Setup Instructions

### Prerequisites

- Windows OS
- XAMPP installed (PHP available at `D:\xampp\php\php.exe`)
- Command Prompt access


### How to Run

1. Open Command Prompt.
2. Navigate to the project directory:
3. Run the script using: D:\xampp\php\php.exe organizer.php "D:\YourTargetFolder"
Examples: D:\xampp\php\php.exe organizer.php "D:\test"

The script will scan the folder and automatically organize files into categorized subfolders.


## Error Handling

The script handles the following scenarios:

- Missing folder path input
- Invalid or non-existing directory
- Skips non-file items
- Creates category folders only when needed


## Future Improvements

If given more time, I would implement:

- A "dry-run" mode to preview changes before moving files
- A logging system to record file movements
- Support for custom categories via JSON configuration
- Recursive folder support (scan subdirectories)
- A simple GUI version for non-technical users


## Author

Nabilah Hanani