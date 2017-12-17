<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);

     }

    public static function form()
    {

        $todo = new todo();
        self::getTemplate('todo',$todo);

    }


    //to call the show function the url is index.php?page=task&action=list_task

     public static function all()
     {
        session_start();
         if(key_exists('userID',$_SESSION)) {
                $userID = $_SESSION['userID'];
            } else {

                echo 'you must be logged in to view tasks';
             header("Location: index.php");
            }
         $userID = $_SESSION['userID'];
         $records = todos::findTasksbyID($userID);
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {

        $todo = new todo();
        session_start();
        $todo->ownerid = $_SESSION['userID'];
        $todo->isdone =$_POST['isdone'];
        $todo->message = $_REQUEST['message'];
        $todo->duedate = $_POST['duedate'];
        $todo->createddate =date("Y/m/d");
        $todo->owneremail =$_POST['owneremail'];
        $todo->save();
        header("Location: index.php?page=tasks&action=all");
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
    }

    // To save data
    public static function save() {

        $todo = todos::findOne($_REQUEST['id']);
        $todo->isdone =$_POST['isdone'];
        $todo->message = $_REQUEST['message'];
        $todo->duedate = $_POST['duedate'];
        $todo->owneremail =$_POST['owneremail'];

        $todo->save();
        header("Location: index.php?page=tasks&action=all");
    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");

    }

}