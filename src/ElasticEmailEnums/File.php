<?php
	namespace ElasticEmailEnums; 

class File
{
    /**
     * Name of your file.
     */
    public /*string*/ $FileName;

    /**
     * Size of your attachment (in bytes).
     */
    public /*?int*/ $Size;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $DateAdded;

    /**
     * When will the file be deleted from the system
     */
    public /*?DateTime*/ $ExpirationDate;

    /**
     * Content type of the file
     */
    public /*string*/ $ContentType;

}
