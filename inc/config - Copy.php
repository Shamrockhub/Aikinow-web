<?php

require '../vendor/autoload.php';
/**
*use Kreait\Firebase\Factory;
*use Kreait\Firebase\ServiceAccount;
*use Google\Cloud\Firestore\FirestoreClient;
**/
//export GOOGLE_APPLICATION_CREDENTIALS="path/to/your/keyfile.json";
//namespace Google\Cloud\Samples\Firestore;

use Google\Cloud\Firestore\FirestoreClient;

/**
 * Initialize Cloud Firestore with default project ID.
 * ```
 * initialize();
 * ```
 */
function initialize()
{
    // Create the Cloud Firestore client
    $db = new FirestoreClient();
    printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
}
//namespace Google\Cloud\Samples\Firestore;

//use Google\Cloud\Firestore\FirestoreClient;

/**
 * Add data to a document.
 * ```
 * add_data('your-project-id');
 * ```
 **/
// s2rHAqEzmdq5zml2LKoB
add_data('aikinow-web');
function add_data($projectId)
{
    // Create the Cloud Firestore client
    $db = new FirestoreClient([
        'projectId' => $projectId,
    ]);
    # [START fs_add_data_1]
    $docRef = $db->collection('users')->document('lovelace');
    $docRef->set([
        'category'    =>"Electrician",
        'email'       => "bulangu97@gmail.com",
        'fname'       => "Aminu",
        'lname'       => "Bulangu",
        'password'    => "123456",
        'phone'       => "080995757679",
        'username'    => "bulanguu"
    ]);
    printf('Added data to the lovelace document in the users collection.' . PHP_EOL);
    # [END fs_add_data_1]
    # [START fs_add_data_2]
    $docRef = $db->collection('Artissan');/**->document('aturing');
    $docRef->set([
        'first' => 'Alan',
        'middle' => 'Mathison',
        'last' => 'Turing',
        'born' => 1912
    ]);
    **/
    //printf('Added data to the aturing document in the users collection.' . PHP_EOL);
    # [END fs_add_data_2]
}
?>