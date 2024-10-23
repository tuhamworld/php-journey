<?php 

// INTRO
// include and require are use to take all the texts/code/markup in a specified file into another file


// MAJOR DIFFERENCES between the two between upon failure :

// require: will produce an eror (E_COMPILE_ERROR) and stop the script
// include: will produce an error (E_WARNING) and continue the script 



// USE CASES
// if you want the execution to proceed and show users the output, even if the include file is missing, use the include statement. 
//  Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing



// SYNTAX

// include "header";
// require "footer";

?>