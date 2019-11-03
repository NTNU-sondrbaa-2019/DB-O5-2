<?php
/**
  * Class for accessing DOM data representation of the contents of a Disney.xml
  * file
  */
class Disney
{
    /**
      * The object model holding the content of the XML file.
      * @var DOMDocument
      */
    protected $doc;

    /**
      * An XPath object that simplifies the use of XPath for finding nodes.
      * @var DOMXPath
      */
    protected $xpath;

    /**
      * param String $url The URL of the Disney XML file
      */
    public function __construct($url)
    {
        $this->doc = new DOMDocument();
        $this->doc->load($url);
        $this->xpath = new DOMXPath($this->doc);
    }

    /**
      * Creates an array structure listing all actors and the roles they have
      * played in various movies.
      * returns Array The function returns an array of arrays. The keys of they
      *               "outer" associative array are the names of the actors.
      *                The values are numeric arrays where each array lists
      *                key information about the roles that the actor has
      *                played. The elments of the "inner" arrays are string
      *                formatted this way:
      *               'As <role name> in <movie name> (movie year)' - such as:
      *               array(
      *               "Robert Downey Jr." => array(
      *                  "As Tony Stark in Iron Man (2008)",
      *                  "As Tony Stark in Spider-Man: Homecoming (2017)",
      *                  "As Tony Stark in Avengers: Infinity War (2018)",
      *                  "As Tony Stark in Avengers: Endgame (2019)"),
      *               "Terrence Howard" => array(
      *                  "As Rhodey in Iron Man (2008)")
      *               )
      */
    public function getActorStatistics()
    {
        $result = array();
        //To do:
        // Implement functionality as specified

        return $result;
    }

    /**
      * Removes Actor elements from the $doc object for Actors that have not
      * played in any of the movies in $doc - i.e., their id's do not appear
      * in any of the Movie/Cast/Role/@actor attributes in $doc.
      */
    public function removeUnreferencedActors()
    {
        //To do:
        // Implement functionality as specified

    }

    /**
      * Adds a new role to a movie in the $doc object.
      * @param String $subsidiaryId The id of the Disney subsidiary
      * @param String $movieName    The name of the movie of the new role
      * @param Integer $movieYear   The production year of the given movie
      * @param String $roleName     The name of the role to be added
      * @param String $roleActor    The id of the actor playing the role
      * @param String $roleAlias    The role's alias (optional)
      */
    public function addRole($subsidiaryId, $movieName, $movieYear, $roleName,
                            $roleActor, $roleAlias = null)
    {
        //To do:
        // Implement functionality as specified

    }
}
?>
