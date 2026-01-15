import zipfile
import xml.etree.ElementTree as ET
import sys
import os
import argparse

def extract_text_from_docx(docx_path, output_path):
    if not os.path.exists(docx_path):
        print(f"File {docx_path} not found.")
        sys.exit(1)

    try:
        with zipfile.ZipFile(docx_path) as z:
            if 'word/document.xml' not in z.namelist():
                 print("word/document.xml not found in zip.")
                 sys.exit(1)
                 
            with z.open('word/document.xml') as f:
                tree = ET.parse(f)
                root = tree.getroot()
                
                def local_name(tag):
                    return tag.split('}')[-1] if '}' in tag else tag

                all_text = []
                for elem in root.iter():
                     tag_name = local_name(elem.tag)
                     if tag_name == 't' and elem.text:
                         all_text.append(elem.text)
                     elif tag_name == 'br':
                         all_text.append('\n')
                     elif tag_name == 'cr':
                         all_text.append('\n')
                     elif tag_name == 'p':
                         all_text.append('\n') 
                
                content = "".join(all_text)
                
                with open(output_path, 'w', encoding='utf-8') as outfile:
                     outfile.write(content)
                print(f"Extraction complete. Saved to {output_path}")

    except Exception as e:
        print(f"Error: {e}")
        sys.exit(1)

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Extract text from docx')
    parser.add_argument('input', help='Input docx file')
    parser.add_argument('output', help='Output text/html file')
    args = parser.parse_args()
    
    extract_text_from_docx(args.input, args.output)
