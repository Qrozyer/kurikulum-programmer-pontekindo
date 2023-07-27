<?php

$data = [];

echo "======================================\n";
echo "============ TODOLIST APP ============\n";
echo "======================================\n";

while(true)
{
    
    echo "\n+++++++++++++ List Task ++++++++++++++\n";
    if(!empty($data))
    {
        foreach ($data as $key => $value) 
        {
        echo "$key. $value\n";
        }
    }else{
        echo "\n------- Your Task Still Empty --------\n";        
    }
    echo "\n################ MENU ################\n";
    echo "1. Add Task\n";
    echo "2. Edit Task\n";
    echo "3. Delete Task\n";
    echo "4. Exit\n";
    echo "Choose : ";
    $choose = trim(fgets(STDIN));
    if($choose == 1)
    {
        echo "~~~~~~~~~~~~~~ Add Task ~~~~~~~~~~~~~~\n";
        echo "Enter Task : ";
        $add = ucwords(strtolower(trim(fgets(STDIN))));
        $index = count($data) + 1;
        $data[$index] = $add;
    }
    elseif($choose == 2)
    {
        if(!empty($data))
        {
            back:
            echo "~~~~~~~~~~~~~~ Edit Task ~~~~~~~~~~~~~~\n";
            echo "Choose Task Number : ";
            $edit = trim(fgets(STDIN));
            if($edit > 0 && $edit <= count($data))
            {
                echo "Edit Task $edit.$data[$edit]\n";
                echo "Are You Sure? (Y/N) : ";
                $confirm= strtoupper(trim(fgets(STDIN)));
                if($confirm == 'Y')
                {                    
                    echo "Enter New Task : ";
                    $update = ucwords(strtolower(trim(fgets(STDIN))));
                    $data[$edit] = $update;
                }
                elseif($confirm == 'N')
                {
                    continue;
                }
                else
                { 
                    echo "Input Invalid!\n";
                    goto back;
                }                          
            }
            else
            {
                echo "Input Invalid!\n";
                goto back;            
            }
        } 
        else
        {
            echo "Task Not Found!\n";
        }
    }
    elseif($choose == 3)
    {
        if(!empty($data))
        {
            back1:
            echo "~~~~~~~~~~~~~ Delete Task ~~~~~~~~~~~~\n";
            echo "Choose Task Number : ";
            $delete = trim(fgets(STDIN));
            if($delete > 0 && $delete <= count($data))
            {
                echo "Delete Task $delete.$data[$delete]\n";
                echo "Are You Sure? (Y/N) : ";
                $confirm1 = strtoupper(trim(fgets(STDIN)));
                if($confirm1 == 'Y')
                {
                    for($i = $delete; $i < count($data); $i++)
                    {
                    $data[$i] = $data[$i + 1];
                    }
                    unset($data[count($data)]);
                }
                elseif($confirm1 == 'N')
                {
                    continue;
                }
                else
                { 
                    echo "Input Invalid!\n";
                    goto back1;
                }          
            }
            else
            {
            echo "Input Invalid!\n";
            goto back1;
            }  
        }
        else
        {
            echo "Task Not Found!\n";
        }
    }
    elseif($choose == 4)
    {
        echo "~~~~~ Thanks For Using This App ~~~~~~\n";
        die;
    }
    else
    {
        echo "Input Invalid!\n";
        
    }
}