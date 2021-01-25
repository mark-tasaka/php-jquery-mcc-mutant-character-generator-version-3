<?php

function getMentalMutationName($input)
{
    //Active Mutations 0-22
    //Passive Mutations 23-25
    $mutationName = array("Cryokinesis","Death Field Generation","Devolution","Domination","Empathy","Force Field Generation","Illusion Generation","Life Force Reflection","Magnetic Control","Mind Control","Mental Blast","Mental Shield","Mental Reflection","Molecular Disruption","Molecular Integration","Pyrokinesis","Telekinesis","Telepathy","Teleportation","Temporary Invulnerability","Thought Spike","Time Sense","Time Stop","Absorption","Dual Brain","Heightened Intelligence");

    return $mutationName[$input];
}

function getMentalMutationType($input)
{
    if($input <= 22)
    {
        $type = "Active";
    }
    else
    {
        $type = "Passive";
    }

    return $type;
}




?>