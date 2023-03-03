prev_commit=$(git rev-parse HEAD^)
# Get the changed lines in the file
changed_lines=$(git diff --unified=0 $prev_commit HEAD | grep -E "^\+")

# Print the changed lines
echo "$changed_lines"
