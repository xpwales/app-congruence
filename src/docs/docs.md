# Congruence Application

A RESTful service for identity management.

Descriptions for Entities

**Tenant**
A tenant represents a space within the Congruence application.

Brand (Organisation)
Brands are the most important entity for multi-tenancy, as each Brand 
maps to one of your application’s tenants. They serve as the first point
of contact between your Application entity and the rest of your user 
base, so any login attempts will first be directed to a Brand. 
The Brand will then in turn use either Directories or Groups to
store its user Accounts.

Group
Groups can be used as "Account sources".


Directory
Directories are containers for Accounts, Accounts are unique within
each directory.

Application
Applications can use Brands, Groups or Directories for account sources. 

Account (user)
Each account must belong to a Directory. Account usernames and 
email addresses are unique within a directory.


Directories and Groups 'own' accounts.