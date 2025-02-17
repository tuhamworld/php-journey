<?php
// The XML language is a way to structure data for sharing across websites.

// XML is easy to create. It looks a lot like HTML, except that you make up your own tags.

// To read and update, create and manipulate an XML document, you will need an XML parser.


// In PHP, the two parsers we have are;


// 1. Tree-Based Parsers - Holds the entire document in Memory and transforms the XML document into a Tree structure. It analyzes the whole document, and provides access to the Tree elements (DOM).
 // This type of parser is a better option for smaller XML documents. (Simple XML, DOM)



 // 2. Event-Based Parsers -  Read in one node at a time and allow you to interact with in real time. Once you move onto the next node, the old one is thrown away.

// This type of parser is well suited for large XML documents (XML Reader, XML Expat Parser)


?>