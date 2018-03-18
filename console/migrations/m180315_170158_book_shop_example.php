<?php

use yii\db\Migration;

/**
 * Class m180315_170158_book_shop_example
 */
class m180315_170158_book_shop_example extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createBooks();
        $this->createAuthors();
        $this->createBooksToAuthors();
        $this->createPublishers();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
        $this->dropTable('author');
        $this->dropTable('book_to_author');
        $this->dropTable('publisher');
    }

     private function createBooks()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'isbn' => $this->string(),
            'date_published' => $this->date(),
            'publisher_id' => $this->integer(),
        ]);

        $this->insert('book', [
            'id' => 1,
            'name' => 'Вий',
            'isbn' => '8934638534',
            'date_published' => '2015-01-21',
            'publisher_id' => 1,
        ]);

        $this->insert('book', [
            'id' => 2,
            'name' => '1984',
            'isbn' => '12978054744',
            'date_published' => '2014-05-02',
            'publisher_id' => 1,
        ]);

        $this->insert('book', [
            'id' => 3,
            'name' => 'Колобок',
            'isbn' => '967846395',
            'date_published' => '2007-10-12',
            'publisher_id' => 2,
        ]);

        $this->insert('book', [
            'id' => 4,
            'name' => 'Мертвые души',
            'isbn' => '213987678',
            'date_published' => '2008-01-01',
            'publisher_id' => 3,
        ]);

        $this->insert('book', [
            'id' => 5,
            'name' => 'Тарас бульба',
            'isbn' => '235975694',
            'date_published' => '2010-02-27',
            'publisher_id' => 3,
        ]);

        $this->insert('book', [
            'id' => 6,
            'name' => 'Казаки',
            'isbn' => '078224745',
            'date_published' => '2010-04-27',
            'publisher_id' => 5,
        ]);

        $this->insert('book', [
            'id' => 7,
            'name' => 'Design Patterns',
            'isbn' => '749579432',
            'date_published' => '2005-05-30',
            'publisher_id' => 5,
        ]);
    }
    
    private function createPublishers()
    {
        $this->createTable('publisher', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'date_registered' => $this->date(),
            'identity_number' => $this->integer(),
        ]);

        $this->insert('publisher', [
            'id' => 1,
            'name' => 'Sigma',
            'date_registered' => '2015-01-21',
            'identity_number' => '197940475',
        ]);

        $this->insert('publisher', [
            'id' => 2,
            'name' => 'Ecsmo',
            'date_registered' => '2014-05-02',
            'identity_number' => '207939506',
        ]);

        $this->insert('publisher', [
            'id' => 3,
            'name' => 'Williams',
            'date_registered' => '2007-10-12',
            'identity_number' => '359794060',
        ]);

        $this->insert('publisher', [
            'id' => 4,
            'name' => 'OReally',
            'date_registered' => '2008-01-01',
            'identity_number' => '407040406',
        ]);

        $this->insert('publisher', [
            'id' => 5,
            'name' => 'Standard',
            'date_registered' => '2010-02-27',
            'identity_number' => '559392929',
        ]);
        
    }
    
    private function createAuthors()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->date(),
            'rating' => $this->integer(),         
        ]);

        $this->insert('author', [
            'id' => 1,
            'first_name' => 'Ivan',
            'last_name' => 'Ivanich',
            'birthdate' => '1920-01-05',
            'rating' => 53,
        ]);

        $this->insert('author', [
            'id' => 2,
            'first_name' => 'Oleg',
            'last_name' => 'Heavy',
            'birthdate' => '1930-01-15',
            'rating' => 85,
        ]);

        $this->insert('author', [
            'id' => 3,
            'first_name' => 'Petr',
            'last_name' => 'Iliych',
            'birthdate' => '1950-06-05',
            'rating' => 79,
        ]);

        $this->insert('author', [
            'id' => 4,
            'first_name' => 'Gleb',
            'last_name' => 'Belov',
            'birthdate' => '1962-11-07',
            'rating' => 90,
        ]);

        $this->insert('author', [
            'id' => 5,
            'first_name' => 'Fedor',
            'last_name' => 'Lukovski',
            'birthdate' => '1967-01-08',
            'rating' => 92,
        ]);

        $this->insert('author', [
            'id' => 6,
            'first_name' => 'Anna',
            'last_name' => 'Run',
            'birthdate' => '1967-01-08',
            'rating' => 77,
        ]);

        $this->insert('author', [
            'id' => 7,
            'first_name' => 'Kirill',
            'last_name' => 'Dniwe',
            'birthdate' => '1950-02-10',
            'rating' => 70,
        ]);
        
        $this->insert('author', [
            'id' => 8,
            'first_name' => 'Ilya',
            'last_name' => 'Maddyson',
            'birthdate' => '1953-02-10',
            'rating' => 70,
        ]);
        
        $this->insert('author', [
            'id' => 9,
            'first_name' => 'Urii',
            'last_name' => 'Hovan',
            'birthdate' => '1952-02-10',
            'rating' => 70,
        ]);
        
        $this->insert('author', [
            'id' => 10,
            'first_name' => 'Alex',
            'last_name' => 'Lisii',
            'birthdate' => '1951-02-10',
            'rating' => 70,
        ]);
        
    }

    private function createBooksToAuthors()
    {
        $this->createTable('book_to_author', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'author_id' => $this->integer(),
        ]);
        
        $this->insert('book_to_author', [
            'id' => 1,
            'book_id' => 1,
            'author_id' => 3,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 2,
            'book_id' => 2,
            'author_id' => 1,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 3,
            'book_id' => 3,
            'author_id' => 2,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 4,
            'book_id' => 4,
            'author_id' => 6,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 5,
            'book_id' => 5,
            'author_id' => 3,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 6,
            'book_id' => 6,
            'author_id' => 4,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 7,
            'book_id' => 6,
            'author_id' => 5,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 8,
            'book_id' => 7,
            'author_id' => 7,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 9,
            'book_id' => 7,
            'author_id' => 8,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 10,
            'book_id' => 7,
            'author_id' => 9,
        ]);
        
        $this->insert('book_to_author', [
            'id' => 11,
            'book_id' => 7,
            'author_id' => 10,
        ]);
    }   
}
