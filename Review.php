<?

class Lists
{
    public $fullName;
    public $bookTitle;
    public $reviewText;
    public $rating;

    function __construct($fullName, $bookTitle, $reviewText, $rating)
    {
        $this->fullName = $fullName;
        $this->bookTitle = $bookTitle;
        $this->reviewText = $reviewText;
        $this->rating = $rating;
    }
    function get_fullname()
    {
        return $this->fullName;
    }
    function get_bookTitle()
    {
        return $this->bookTitle;
    }
    function get_reviewText()
    {
        return $this->reviewText;
    }
    function get_rating()
    {
        return $this->rating;
    }
}
