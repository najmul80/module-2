<?php

$contacts = [];

// Add Contact
function addContact(array &$contacts, string $name, string $email, string $mobile):void{
    $contacts[] = ['name'=> $name, 'email'=> $email, 'mobile'=> $mobile];
}

// display contacts

function displayContacts(array $contacts): void{
    if (empty($contacts)) {
        echo "No contact available. \n";
    } else{
        foreach($contacts as $key => $contact){
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Mobile: {$contact['mobile']}, ";
        }
    }
}

while(true){
    echo "\nContact Management Menu\n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n";

    $choice = (int)readline("Choose an option: ");
    if ($choice ===1) {
        $name = readline("Enter your name: ");
        $email = readline("Enter your email: ");
        $mobile = readline("Enter your mobile: ");
        addContact($contacts, $name, $email, $mobile);
        echo "$name added successfully. \n";
    } elseif ($choice ===2) {
        displayContacts($contacts);
    } elseif ($choice ===3) {
        echo "Existing...\n";
        break;
    } else{
        echo "Invalid Choice";
    }
}