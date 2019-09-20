<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Purplenex\Vinsent\BookList;
use Purplenex\Vinsent\Book;

class IteratorTest extends TestCase {

	public function testCanIterateOverBookList()
	{
		$bookList = new BookList;
		$bookList->addBook(new Book('Getting Things Done', 'David Allen'));
		$bookList->addBook(new Book('Strive', 'Ariana Huffington'));

		$books = [];

		foreach($bookList as $book)
		{
			$books[] = $book->getAuthorAndTitle();
		}

		$this->assertSame(
			[
				'Getting Things Done by David Allen',
				'Strive by Ariana Huffington',
			], $books
		);
	}

	public function testCanIterateOverBookListAfterRemovingBook()
	{
		$book1 = new Book('Getting Things Done', 'David Allen');
		$book2 = new Book('Strive', 'Ariana Huffington');

		$bookList = new BookList;
		$bookList->addBook($book1);
		$bookList->removeBook($book2);

		$books = [];

		foreach($bookList as $book)
		{
			$books[] = $book->getAuthorAndTitle();
		}

		$this->assertSame(
			[
				'Getting Things Done by David Allen',
			], $books
		);
	}

	public function testCanAddBookToBookList()
	{
		$book = new Book('3 Hour Work Week', 'Tim Feriss');

		$bookList = new BookList;
		$bookList->addBook($book);

		$this->assertCount(1, $bookList);
	}

	public function testCanAddBooksToBookList()
	{
		$book1 = new Book('Sore', 'TD Jakes');
		$book2 = new Book('Everyday Potential', 'Myles Munroe');

		$bookList = new BookList;
		$bookList->addBook($book1);
		$bookList->addBook($book2);

		$this->assertCount(2, $bookList);
	}

	public function testCanRemoveBookFromBookList()
	{
		$book = new Book('Americana', 'Adichi Chimamanda');

		$bookList = new BookList;
		$bookList->addBook($book);
		$bookList->removeBook($book);

		$this->assertCount(0, $bookList);
	}
}