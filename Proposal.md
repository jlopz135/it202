https://mediaspace.njit.edu/id/1_agoxzslk

# Project Name: Simple Shop
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: https://github.com/jlopz135/it202-009/tree/prod
## Project Board Link: https://github.com/jlopz135/it202-009/projects/1
## Website Link: https://jl2237-prod.herokuapp.com/Project/login.php
## Your Name: Juan Lopez

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
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
      - Status: Completed
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

  <table><tr><td>Milestone 2</td></tr><tr><td><table><tr><td>F1 - User with an admin role or shop owner role will be able to add products to inventory (2021-12-02)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/admin/add_items.php](https://jl2237-prod.herokuapp.com/Project/admin/add_items.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/91](https://github.com/jlopz135/it202-009/pull/91)</p></td></tr><tr><td><table><tr><td>F1 - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144474753-a9eb3684-2ec6-4ea2-be1d-11149be46bad.png"><p>Showing Add Product Page</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144478650-0c7eccd6-cfee-4738-a1e6-d4050a0d1d48.png"><p>Products Table</td></tr></td></tr></table></td></tr><table><tr><td>F2 - Any user will be able to see products with visibility = true on the Shop page ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/shop.php](https://jl2237-prod.herokuapp.com/Project/shop.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/91](https://github.com/jlopz135/it202-009/pull/91)</p><p>

 [https://github.com/jlopz135/it202-009/pull/93](https://github.com/jlopz135/it202-009/pull/93)</p></td></tr><tr><td><table><tr><td>F2 - Product list page will be public (i.e. doesn’t require login)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144479176-e6753ff8-cb01-4ae2-8869-e7f53723f7f4.png"><p>Visibility for 2 products are true, the third is false thus not shown</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by category<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144480212-a507d564-e533-4957-baba-ffe6489e99b7.png"><p>Results by category (asc and desc)</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by partial matches on the name<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144480372-cc6551b1-5519-4264-b273-cb214ff03890.png"><p>Partial name search</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to sort results by price<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144480820-60ed5b31-ca92-46a7-94a3-e5a25c09f8ca.png"><p>Sort by Price</td></tr></td></tr></table></td></tr><table><tr><td>F3 - Admin/Shop owner will be able to see products with any visibility ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/admin/items.php](https://jl2237-prod.herokuapp.com/Project/admin/items.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/91](https://github.com/jlopz135/it202-009/pull/91)</p></td></tr><tr><td><table><tr><td>F3 - This should be a separate page from Shop, but will be similar & This page should only be accessible to the appropriate role(s)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144481372-272e253b-6abf-4ef8-9d60-6993688237fb.png"><p>Lists all items for Role accounts</td></tr></td></tr></table></td></tr><table><tr><td>F4 - Admin/Shop owner will be able to edit any product ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/admin/edit_item.php?id=2](https://jl2237-prod.herokuapp.com/Project/admin/edit_item.php?id=2)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/91](https://github.com/jlopz135/it202-009/pull/91)</p></td></tr><tr><td><table><tr><td>F4 - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144483991-11d6f9ab-d474-4f57-8faa-ff3cbabcb440.png"><p>Edit button for proper roles</td></tr></td></tr></table></td></tr><table><tr><td>F5 - User will be able to click an item from a list and view a full page with more info about the item (Product Details Page) ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/product_details.php?id=1](https://jl2237-prod.herokuapp.com/Project/product_details.php?id=1)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/96](https://github.com/jlopz135/it202-009/pull/96)</p></td></tr><tr><td><table><tr><td>F5 - Product Page<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144484415-6b463d2f-787e-4bdc-8e28-a4317252674e.png"><p></td></tr></td></tr></table></td></tr><table><tr><td>F6 - User must be logged in for any Cart related activity below ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/cart.php](https://jl2237-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/91](https://github.com/jlopz135/it202-009/pull/91)</p></td></tr><tr><td><table><tr><td>F6 - Cart Accessibility<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144484883-1cdf4ce5-246c-464b-8587-191ddaace398.png"><p></td></tr></td></tr></table></td></tr><table><tr><td>F7 - User will be able to add items to Cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/cart.php?action=add&id=1](https://jl2237-prod.herokuapp.com/Project/cart.php?action=add&id=1)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/93](https://github.com/jlopz135/it202-009/pull/93)</p></td></tr><tr><td><table><tr><td>F7 - Cart will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144485889-33f2445e-88d1-4473-958c-1e7ac6035ce9.png"><p>Cart Table</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F7 - Adding items to Cart will not affect the Product's quantity in the Products table<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144486010-1612956e-4265-4a36-a4dd-3739c983579e.png"><p>Stock didnt change</td></tr></td></tr></table></td></tr><table><tr><td>F8 - User will be able to see their cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/cart.php](https://jl2237-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/93](https://github.com/jlopz135/it202-009/pull/93)</p></td></tr><tr><td><table><tr><td>F8 - Show subtotal for each line item based on desired_quantity * unit_cost & Show total cart value (sum of line item subtotals)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144486306-7d009d08-7805-4150-99db-e0ed1eaacc1d.png"><p>Cart subtotal and total shown</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Will be able to click an item to see more details (Product Details Page)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144486457-6c1f7540-8726-4c12-bf6d-d567dc187ecc.png"><p>Can see product details</td></tr></td></tr></table></td></tr><table><tr><td>F9 - User will be able to change quantity of items in their cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/cart.php?action=remove&id=65](https://jl2237-prod.herokuapp.com/Project/cart.php?action=remove&id=65)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/93](https://github.com/jlopz135/it202-009/pull/93)</p></td></tr><tr><td><table><tr><td>F9 - Quantity of 0 should also remove from cart<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144486650-fe4ee31d-4b56-4784-af09-c4503243639f.png"><p>item id of 65 removed from cart since quantity is 0. quantity is adjusted with add and remove</td></tr></td></tr></table></td></tr><table><tr><td>F10 - User will be able to remove a single item from their cart via button click ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/cart.php?action=remove&id=65](https://jl2237-prod.herokuapp.com/Project/cart.php?action=remove&id=65)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/93](https://github.com/jlopz135/it202-009/pull/93)</p></td></tr><tr><td><table><tr><td>F10 - Remove button<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144486975-9cea7d34-37ec-4293-a14e-841dd84e7a70.png"><p></td></tr></td></tr></table></td></tr><table><tr><td>F11 - User will be able to clear their entire cart via a button click ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/cart.php?action=empty](https://jl2237-prod.herokuapp.com/Project/cart.php?action=empty)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/93](https://github.com/jlopz135/it202-009/pull/93)</p></td></tr><tr><td><table><tr><td>F11 - Empty Cart<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/54092513/144487107-38e7e3d9-e6f3-4de3-9b36-1ad2253547f2.png"><p></td></tr></td></tr></table></td></tr></td></tr></table>
- Milestone 3
  <table><tr><td>milestone 3</td></tr><tr><td><table><tr><td>F1 - User will be able to purchase items in their Cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/checkout.php](https://jl2237-prod.herokuapp.com/Project/checkout.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/109](https://github.com/jlopz135/it202-009/pull/109)</p><p>

 [https://github.com/jlopz135/it202-009/pull/110](https://github.com/jlopz135/it202-009/pull/110)</p></td></tr><tr><td><table><tr><td>F1 - Create an Orders table (id, user_id, created, total_price, address, payment_method)<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145627163-e579fdd0-d8c3-4ff8-820e-3a858f76ba09.png"><p>Orders table</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Create an OrderItems table (id, order_id, product_id, quantity, unit_price)<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145627255-4aa24fe1-6659-4e2e-ad76-5c01455ed32f.png"><p>OrderItems table</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Checkout Form<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145627799-53384c9d-691d-46b7-8b90-1a4e122add8b.png"><p>Checkout page</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - User will be asked for their Address for shipping purposes<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145628894-e40b0444-f412-43dd-a0fd-82130091439f.png"><p>Address request</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Order process (Verify current Price to Products table)<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145628971-f9e5bec4-1c90-43d0-a446-1549d7ca7a15.png"><p>Current price shows current product price</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Product Quantity<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145629240-7b465f3a-ffb0-4169-837a-6a62ee90e097.png"><p>Quantity check</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Entry into Orders Table<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145629813-17175a5d-a5f6-4d4f-948b-5cdeaa72541d.png"><p>Order entered into table</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Copy Cart details into OrderItems table <tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145630563-3d23757a-20f8-4b20-9837-ee832892fb7a.png"><p>one item inserted into orderItems table</td></tr></td></tr></table></td></tr><table><tr><td>F2 - Redirect to order confirmation page ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/confirmation.php](https://jl2237-prod.herokuapp.com/Project/confirmation.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/111](https://github.com/jlopz135/it202-009/pull/111)</p></td></tr><tr><td><table><tr><td>F2 - Show order details from the Order and OrderItems table<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145631264-52e5e171-a1fa-4869-be40-5b1ac752d4ee.png"><p>Order Details</td></tr></td></tr></table></td></tr><table><tr><td>F3 - User will be able to see their purchase history ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/orderDetails.php?id=22](https://jl2237-prod.herokuapp.com/Project/orderDetails.php?id=22)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/112](https://github.com/jlopz135/it202-009/pull/112)</p><p>

 [https://github.com/jlopz135/it202-009/pull/111](https://github.com/jlopz135/it202-009/pull/111)</p></td></tr><tr><td><table><tr><td>F3 - List item can be clicked to view the full details in the Order Details Page<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145631749-a06c747f-a3a6-4de7-b14b-a4c1d3bb6e05.png"><p>purchase history</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145631844-deb132de-b55e-4f5d-8b0b-8ca21eac96a7.png"><p>List items button clicked</td></tr></td></tr></table></td></tr><table><tr><td>F4 - Store owner will be able to see all Purchase History ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/admin/all_orders.php](https://jl2237-prod.herokuapp.com/Project/admin/all_orders.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/111](https://github.com/jlopz135/it202-009/pull/111)</p><p>

 [https://github.com/jlopz135/it202-009/pull/112](https://github.com/jlopz135/it202-009/pull/112)</p><p>

 [https://github.com/jlopz135/it202-009/pull/113](https://github.com/jlopz135/it202-009/pull/113)</p></td></tr><tr><td><table><tr><td>F4 - A list item can be clicked to view the full details in the Order Details Page<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/54092513/145632312-6ae58888-e75b-4260-a56f-f12a0663a629.png"><p>Store owner can see purchase history</td></tr></td></tr></table></td></tr></td></tr></table>

- Milestone 4

<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) (2021-12-13)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/showUsers.php](https://jl2237-prod.herokuapp.com/Project/showUsers.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/118](https://github.com/jlopz135/it202-009/pull/118)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - if public, hide email addresses from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147029507-42d761a4-e210-47df-90e2-1c451fee1b69.png">
<p>Users emails hidden</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able to rate a product they purchased (2021-12-13)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/product_details.php?id=1](https://jl2237-prod.herokuapp.com/Project/product_details.php?id=1)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/120](https://github.com/jlopz135/it202-009/pull/120)</p><p>

 [https://github.com/jlopz135/it202-009/pull/136](https://github.com/jlopz135/it202-009/pull/136)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Create Table called Ratings</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147029913-46a0139d-2b51-470e-8d84-e62b91f6c90d.png">
<p>ratings table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Show 10 latest reviews on product details page with average and pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147029871-ad360d6b-97bb-451a-a100-689417976ad3.png">
<p>pagination of reviews </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User’s Purchase History Changes (2021-12-19)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/userHistory.php?col=total_price&order=asc&page=1](https://jl2237-prod.herokuapp.com/Project/userHistory.php?col=total_price&order=asc&page=1)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/131](https://github.com/jlopz135/it202-009/pull/131)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - Filter date range and category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030095-c3af25dd-75b0-4279-9288-6f4ffe0d7c48.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Sort by total, date purchased</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030164-3bafea0a-7129-41f4-b7bf-5fa5d459a2a2.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Add pagination with filter applied</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030232-1f380af9-7df9-4964-a15a-f4667cf75521.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Store Owner Purchase History Changes (2021-12-19)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/admin/all_orders.php](https://jl2237-prod.herokuapp.com/Project/admin/all_orders.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/131](https://github.com/jlopz135/it202-009/pull/131)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - filter by date range, category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030412-dfd0cfe5-44d6-4c1d-b480-88e465fc4c10.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - sort by total, date purchase, etc</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030473-2193882e-9ee5-429f-bb5d-b744b28fe66b.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Add pagination with applied filter</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030560-fe68cadc-ef7e-4ec4-a05c-1ffd0430bc16.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - show total for result page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030560-fe68cadc-ef7e-4ec4-a05c-1ffd0430bc16.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Add Pagination to Shop Page (2021-12-19)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/shop.php](https://jl2237-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/131](https://github.com/jlopz135/it202-009/pull/131)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - Pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030659-59ea8259-c827-42ec-b513-3c2030dfd311.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Store Owner will be able to see all products out of stock (2021-12-19)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/admin/items.php](https://jl2237-prod.herokuapp.com/Project/admin/items.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/131](https://github.com/jlopz135/it202-009/pull/131)</p><p>

 [https://github.com/jlopz135/it202-009/pull/132](https://github.com/jlopz135/it202-009/pull/132)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - Pagination on this filter</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147030787-e9ea9ed8-b6e2-44b7-ae14-8b5cf89c4ad4.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - User can sort products by average rating on the Shop Page (2021-12-18)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://jl2237-prod.herokuapp.com/Project/shop.php?name=&col=avg_rating&order=asc](https://jl2237-prod.herokuapp.com/Project/shop.php?name=&col=avg_rating&order=asc)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/jlopz135/it202-009/pull/125](https://github.com/jlopz135/it202-009/pull/125)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Sort by Rating</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/54092513/147031010-a0e677f9-9b47-4656-9c29-530ef1ee0815.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>
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
