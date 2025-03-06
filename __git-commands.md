# Initiate a new repo (Create a new reposotory)
git init

# Define yourself at GIT
git config --global user.name "Your Name"
git config --global user.email "your-email@domain.com"

# Add a file to the tracking list
git add path-to-file

# Add all files to the tracking list
git add .

# To create a new version of current updates (commit)
git commit -m "Your Message"

# Check the current repo status
git status

# Undo all changes to a file since last commit
git restore path-to-file

# Undo all changes to all files since last commit
git restore .

# See a log of all commits
git log
    - For long logs
        * to see next log page (spacebar)
        * to see prev log page (w)
        * to exit the log (q)

# undo last commit
git reset HEAD~

# clone (copy) someone's repo
git clone repo link -> get from the green button in the repo