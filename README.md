## Read One-to-One basics & try with this code as you want

Go throw **laravel documentation** & many more blog

first you need to clone this and save **.env.example as .env** and setup your environment or just change the database configure

```sh
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=your-database-name
- DB_USERNAME=your-database-user-name
- DB_PASSWORD=your-database-password(if have)
```

Now just run some command on terminal

```sh
composer install
php artisan migrate
php artisan serve
```

As I have said this is One to One relationship. //Imagine part
- Example1: A User can have one profile data but can't be multiple
- Example2: Student can have one ID information
- Example3: Office can have one employee profile

So I have just created Two model
- **User**
- **Profile**

User Model are relation with hasOne

```sh
    public function user()
    {
        return $this->belongsTo(User::class);
    }
```

Profile Model are relation with belongsTo

```sh
    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    // You can save return $this->belongsTo(User::class, 'user_id');
    relation column name if you didn't follow the convention 
```

And controller code are depend's on condition what I need. So you can got throw the controller method.

if you have **Postman**/any software like that please import One-to-One.postman_collection.json file either call
```sh
- {url-of-your-app}/api/users                 --method : get     // get all user list with profile
- {url-of-your-app}/api/users/{user}          --method : get     // get one user by id with profile
- {url-of-your-app}/api/users                 --method : post    // insert user and profile details
- {url-of-your-app}/api/users/{user}          --method : put     // update user details
- {url-of-your-app}/api/users/{user}          --method : delete  // delete user and profile details
- {url-of-your-app}/api/profile/{profile}     --method : get     // get one profile details by id
- {url-of-your-app}/api/profile/{profile}     --method : put     // update profile details
```
