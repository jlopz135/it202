# Project Name: Simple Shop
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: https://github.com/jlopz135/it202-009/tree/prod
## Project Board Link: 
## Website Link: NEED TO UPDATE, JUST A PLACEHOLDER https://jl2237-prod.herokuapp.com/
## Your Name: Juan Lopez

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
  - [x] (10/12/2021) User will be able to register a new account
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/register.php
      - Pull Requests
        - PR link #1 https://github.com/jlopz135/it202-009/pull/15
     - Screenshots
       - Screenshot #1 ![image](https://user-images.githubusercontent.com/54092513/140668766-556e012f-4b36-43dd-b65f-a1c3bbb38a66.png)
          - Screenshot #1: This is the registration page. Users will be able to submit emails, username, password.
  - [x] (10/12/2021) User will be able to login to their account
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/login.php
      - Pull Requests
        - PR link #1 https://github.com/jlopz135/it202-009/pull/15
     - Screenshots
       - Screenshot #1 ![image](https://user-images.githubusercontent.com/54092513/140668846-70f7bda6-d2c9-40cd-8c6f-9fa7fa95d4e8.png)
          - Screenshot #1: User will be able to login to their account, given they have registered.
  - [x] (10/12/2021) User will be able to logout
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/logout.php (will direct to Login) 
      - Pull Requests
        - PR link #1 https://github.com/jlopz135/it202-009/pull/15
     - Screenshots
       - Screenshot #1 ![image](https://user-images.githubusercontent.com/54092513/140669279-db000111-5678-40fb-b449-6eae0715bdd9.png)
          - Screenshot #1: User will be able to logout once logged in, redirecting them to login page when logged out.
  - [x] (10/14/2021) Basic Security rules implemented
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link: https://github.com/jlopz135/it202-009/pull/18 
     - Screenshots
       - Screenshot #1 ![image](https://user-images.githubusercontent.com/54092513/140798965-af3bd6cf-ef03-4b63-bdb0-dd4be37acba6.png)
          - Screenshot #1: Cannot access the profile page unless you are in a registered account.
       - Screenshot #2: ![image](https://user-images.githubusercontent.com/54092513/140843562-3fc039d0-dc79-4ea0-8855-c23f178501fe.png)
          - Screenshot #2: no access since role isn't given
  - [x] (10/28/2021) Basic Roles implemented
    -  List of Evidence of Feature Completion
      - Status: NOT Completed
      - Direct Link: http://localhost:3000/Project/admin/list_roles.php
                   - http://localhost:3000/Project/admin/create_role.php
                   - http://localhost:3000/Project/admin/assign_roles.php
      - Pull Requests
        - PR link #1: https://github.com/jlopz135/it202-009/pull/29 
     - Screenshots
       - Screenshot #1: ![image](https://user-images.githubusercontent.com/54092513/140988673-772873c8-3575-4418-9987-f34c2e7c7f30.png)
          - Screenshot #1: Listing roles present along witht the nav bar showing what other admin abilities are present.
  - [x] (11/08/2021) Site should have basic styles/theme applied; everything should be styled
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/styles.css
      - Pull Requests
        - PR link #1: https://github.com/jlopz135/it202-009/pull/60 
     - Screenshots
       - Screenshot #1: ![image](https://user-images.githubusercontent.com/54092513/140842252-38329335-7624-4130-bb8f-ae0edba344fc.png)
          - Screenshot #1: all elements that should be styled, are.
  - [x] (10/14/2021) Any output messages/errors should be "user friendly"
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/helper.js
      - Pull Requests
        - PR link: https://github.com/jlopz135/it202-009/pull/18 
     - Screenshots
       - Screenshot #1: ![image](https://user-images.githubusercontent.com/54092513/140801159-f7f871d6-8e4b-42b9-aa73-f7f9956c82e2.png)
          - Screenshot #1: No username was provided, user was prompted to provide username
       - Screenshot #2: ![image](https://user-images.githubusercontent.com/54092513/140801319-ecaf436a-0393-4ece-9246-87282841fe20.png)
          - Screenshot #2: User is prompted to put in the proper length of a password
       - Screenshot #3: ![image](https://user-images.githubusercontent.com/54092513/140801830-c12f4c6f-59a6-4b79-8e62-c3883ea53060.png)
          - Screenshot #3: User fields have pre-reqs that must be satisfied
  - [x] (10/28/2001) User will be able to see their profile
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/admin/assign_roles.php
                   - https://jl2237-prod.herokuapp.com/Project/admin/create_role.php
                   - https://jl2237-prod.herokuapp.com/Project/admin/list_roles.php 
      - Pull Requests
        - PR link #1: https://github.com/jlopz135/it202-009/pull/29 
     - Screenshots
       - Screenshot #1: ![image](https://user-images.githubusercontent.com/54092513/140844390-7fc016d5-e857-496b-884e-35ea831fa98e.png)
          - Screenshot #1: This is the users profile page given they're logged in.
  - [x] (10/18/2021) User will be able to edit their profile
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://jl2237-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/jlopz135/it202-009/pull/27
     - Screenshots
       - Screenshot #1: ![image](https://user-images.githubusercontent.com/54092513/140845092-23a7e8f6-4143-43c0-864f-2643e19a1690.png)
          - Screenshot #1: If user wants to update password they are able to under profile page
- Milestone 2
- Milestone 3
- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board










