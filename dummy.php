function childStart(&$daemon)
{
    $dummy = new dummy();
    $dummy->setuniq();
    echo "Starting new child with: {$dummy->uniqid}\n";
    $daemon->childObject = $dummy;
    return TRUE;
}