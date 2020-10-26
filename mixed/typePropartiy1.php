<?php
class User{}
class Manger extends User{}
class UserManagement
{
    public User $user;
}
class AdminManagement extends UserManagement
{
    public User $user;
}
$one = new User;
