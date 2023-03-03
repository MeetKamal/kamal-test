
# Get the changed lines in the file
changed_lines=$(git diff --unified=0 HEAD^ HEAD $1 | grep -E "^\+")

# Print the changed lines
echo "$changed_lines"
