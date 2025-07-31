<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SharedWord;

class SharedWordsSeeder extends Seeder
{

   
    public function run(): void
    {

        if (SharedWord::count() > 0) {
        echo "Shared words already seeded, skipping.\n";
        return;
    }
        $words = [
            ['finnish' => 'omena', 'english' => 'apple', 'category' => 'food', 'example' => 'Syön omenan. (I eat an apple.)'],
            ['finnish' => 'banaani', 'english' => 'banana', 'category' => 'food', 'example' => 'Banaani on keltainen. (The banana is yellow.)'],
            ['finnish' => 'kissa', 'english' => 'cat', 'category' => 'animals', 'example' => 'Kissa nukkuu. (The cat is sleeping.)'],
            ['finnish' => 'koira', 'english' => 'dog', 'category' => 'animals', 'example' => 'Koira juoksee puistossa. (The dog runs in the park.)'],
            ['finnish' => 'lintu', 'english' => 'bird', 'category' => 'animals', 'example' => 'Lintu lentää korkealla. (The bird flies high.)'],
            ['finnish' => 'kala', 'english' => 'fish', 'category' => 'animals', 'example' => 'Kala ui vedessä. (The fish swims in the water.)'],
            ['finnish' => 'puu', 'english' => 'tree', 'category' => 'nature', 'example' => 'Iso puu kasvaa pihalla. (A big tree grows in the yard.)'],
            ['finnish' => 'kukka', 'english' => 'flower', 'category' => 'nature', 'example' => 'Kukka tuoksuu hyvälle. (The flower smells nice.)'],
            ['finnish' => 'aurinko', 'english' => 'sun', 'category' => 'nature', 'example' => 'Aurinko paistaa tänään. (The sun is shining today.)'],
            ['finnish' => 'kuu', 'english' => 'moon', 'category' => 'nature', 'example' => 'Kuu on kirkas. (The moon is bright.)'],
            ['finnish' => 'vesi', 'english' => 'water', 'category' => 'nature', 'example' => 'Juon vettä. (I drink water.)'],
            ['finnish' => 'tuli', 'english' => 'fire', 'category' => 'nature', 'example' => 'Tuli on kuuma. (The fire is hot.)'],
            ['finnish' => 'maa', 'english' => 'earth', 'category' => 'nature', 'example' => 'Maa on märkä. (The earth is wet.)'],
            ['finnish' => 'tuuli', 'english' => 'wind', 'category' => 'nature', 'example' => 'Tuuli puhaltaa kovaa. (The wind blows hard.)'],
            ['finnish' => 'lumi', 'english' => 'snow', 'category' => 'nature', 'example' => 'Lumi peittää maan. (Snow covers the ground.)'],
            ['finnish' => 'sade', 'english' => 'rain', 'category' => 'nature', 'example' => 'Sataa vettä. (It is raining.)'],
            ['finnish' => 'pilvi', 'english' => 'cloud', 'category' => 'nature', 'example' => 'Pilvi on harmaa. (The cloud is grey.)'],
            ['finnish' => 'taivas', 'english' => 'sky', 'category' => 'nature', 'example' => 'Taivas on sininen. (The sky is blue.)'],
            ['finnish' => 'tähti', 'english' => 'star', 'category' => 'nature', 'example' => 'Tähti loistaa yössä. (The star shines at night.)'],
            ['finnish' => 'yö', 'english' => 'night', 'category' => 'time', 'example' => 'Yö on pimeä. (The night is dark.)'],
            ['finnish' => 'päivä', 'english' => 'day', 'category' => 'time', 'example' => 'Päivä on pitkä. (The day is long.)'],
            ['finnish' => 'aamu', 'english' => 'morning', 'category' => 'time', 'example' => 'Aamu on kylmä. (The morning is cold.)'],
            ['finnish' => 'ilta', 'english' => 'evening', 'category' => 'time', 'example' => 'Ilta on rauhallinen. (The evening is calm.)'],
            ['finnish' => 'talo', 'english' => 'house', 'category' => 'places', 'example' => 'Talo on iso. (The house is big.)'],
            ['finnish' => 'auto', 'english' => 'car', 'category' => 'transport', 'example' => 'Auto on nopea. (The car is fast.)'],
            ['finnish' => 'polkupyörä', 'english' => 'bicycle', 'category' => 'transport', 'example' => 'Polkupyörä on punainen. (The bicycle is red.)'],
            ['finnish' => 'bussi', 'english' => 'bus', 'category' => 'transport', 'example' => 'Bussi lähtee kello kahdeksan. (The bus leaves at eight.)'],
            ['finnish' => 'juna', 'english' => 'train', 'category' => 'transport', 'example' => 'Juna saapuu asemalle. (The train arrives at the station.)'],
            ['finnish' => 'tie', 'english' => 'road', 'category' => 'transport', 'example' => 'Tie on mutkainen. (The road is winding.)'],
            ['finnish' => 'koulu', 'english' => 'school', 'category' => 'places', 'example' => 'Koulu alkaa aamulla. (School starts in the morning.)'],
            ['finnish' => 'opettaja', 'english' => 'teacher', 'category' => 'people', 'example' => 'Opettaja on ystävällinen. (The teacher is kind.)'],
            ['finnish' => 'opiskelija', 'english' => 'student', 'category' => 'people', 'example' => 'Opiskelija lukee kirjaa. (The student is reading a book.)'],
            ['finnish' => 'kirja', 'english' => 'book', 'category' => 'objects', 'example' => 'Kirja on mielenkiintoinen. (The book is interesting.)'],
            ['finnish' => 'kynä', 'english' => 'pen', 'category' => 'objects', 'example' => 'Kynä on sininen. (The pen is blue.)'],
            ['finnish' => 'paperi', 'english' => 'paper', 'category' => 'objects', 'example' => 'Paperi on valkoinen. (The paper is white.)'],
            ['finnish' => 'tietokone', 'english' => 'computer', 'category' => 'technology', 'example' => 'Tietokone on uusi. (The computer is new.)'],
            ['finnish' => 'puhelin', 'english' => 'phone', 'category' => 'technology', 'example' => 'Puhelin soi. (The phone is ringing.)'],
            ['finnish' => 'pöytä', 'english' => 'table', 'category' => 'furniture', 'example' => 'Pöytä on puinen. (The table is wooden.)'],
            ['finnish' => 'tuoli', 'english' => 'chair', 'category' => 'furniture', 'example' => 'Tuoli on mukava. (The chair is comfortable.)'],
            ['finnish' => 'ikkuna', 'english' => 'window', 'category' => 'furniture', 'example' => 'Ikkuna on auki. (The window is open.)'],
            ['finnish' => 'ovi', 'english' => 'door', 'category' => 'furniture', 'example' => 'Ovi on suljettu. (The door is closed.)'],
            ['finnish' => 'keittiö', 'english' => 'kitchen', 'category' => 'places', 'example' => 'Keittiö on siisti. (The kitchen is clean.)'],
            ['finnish' => 'kylpyhuone', 'english' => 'bathroom', 'category' => 'places', 'example' => 'Kylpyhuone on pieni. (The bathroom is small.)'],
            ['finnish' => 'sänky', 'english' => 'bed', 'category' => 'furniture', 'example' => 'Sänky on pehmeä. (The bed is soft.)'],
            ['finnish' => 'tyyny', 'english' => 'pillow', 'category' => 'furniture', 'example' => 'Tyyny on valkoinen. (The pillow is white.)'],
            ['finnish' => 'peitto', 'english' => 'blanket', 'category' => 'furniture', 'example' => 'Peitto on lämmin. (The blanket is warm.)'],
            ['finnish' => 'paita', 'english' => 'shirt', 'category' => 'clothing', 'example' => 'Paita on sininen. (The shirt is blue.)'],
            ['finnish' => 'housut', 'english' => 'pants', 'category' => 'clothing', 'example' => 'Housut ovat mustat. (The pants are black.)'],
            ['finnish' => 'kengät', 'english' => 'shoes', 'category' => 'clothing', 'example' => 'Kengät ovat uudet. (The shoes are new.)'],
            ['finnish' => 'sukat', 'english' => 'socks', 'category' => 'clothing', 'example' => 'Sukat ovat punaiset. (The socks are red.)'],
            ['finnish' => 'hattu', 'english' => 'hat', 'category' => 'clothing', 'example' => 'Hattu on iso. (The hat is big.)'],
            ['finnish' => 'takki', 'english' => 'jacket', 'category' => 'clothing', 'example' => 'Takki on lämmin. (The jacket is warm.)'],
            ['finnish' => 'ruoka', 'english' => 'food', 'category' => 'food', 'example' => 'Ruoka on herkullista. (The food is delicious.)'],
            ['finnish' => 'leipä', 'english' => 'bread', 'category' => 'food', 'example' => 'Leipä on tuore. (The bread is fresh.)'],
            ['finnish' => 'juusto', 'english' => 'cheese', 'category' => 'food', 'example' => 'Juusto on kova. (The cheese is hard.)'],
            ['finnish' => 'maito', 'english' => 'milk', 'category' => 'food', 'example' => 'Maito on kylmää. (The milk is cold.)'],
            ['finnish' => 'kahvi', 'english' => 'coffee', 'category' => 'food', 'example' => 'Kahvi on kuumaa. (The coffee is hot.)'],
            ['finnish' => 'tee', 'english' => 'tea', 'category' => 'food', 'example' => 'Tee on vihreää. (The tea is green.)'],
            ['finnish' => 'keitto', 'english' => 'soup', 'category' => 'food', 'example' => 'Keitto on maukasta. (The soup is tasty.)'],
            ['finnish' => 'liha', 'english' => 'meat', 'category' => 'food', 'example' => 'Liha on pehmeää. (The meat is tender.)'],
            ['finnish' => 'kananmuna', 'english' => 'egg', 'category' => 'food', 'example' => 'Kananmuna on keitetty. (The egg is boiled.)'],
            ['finnish' => 'hedelmä', 'english' => 'fruit', 'category' => 'food', 'example' => 'Hedelmä on makea. (The fruit is sweet.)'],
            ['finnish' => 'vihannes', 'english' => 'vegetable', 'category' => 'food', 'example' => 'Vihannes on tuore. (The vegetable is fresh.)'],
            ['finnish' => 'peruna', 'english' => 'potato', 'category' => 'food', 'example' => 'Peruna on keitetty. (The potato is boiled.)'],
            ['finnish' => 'sipuli', 'english' => 'onion', 'category' => 'food', 'example' => 'Sipuli on punainen. (The onion is red.)'],
            ['finnish' => 'porkkana', 'english' => 'carrot', 'category' => 'food', 'example' => 'Porkkana on makea. (The carrot is sweet.)'],
            ['finnish' => 'salaatti', 'english' => 'lettuce', 'category' => 'food', 'example' => 'Salaatti on raikas. (The lettuce is fresh.)'],
            ['finnish' => 'suola', 'english' => 'salt', 'category' => 'food', 'example' => 'Suola on valkoinen. (The salt is white.)'],
            ['finnish' => 'sokeri', 'english' => 'sugar', 'category' => 'food', 'example' => 'Sokeri on makeaa. (The sugar is sweet.)'],
            ['finnish' => 'voi', 'english' => 'butter', 'category' => 'food', 'example' => 'Voi on pehmeää. (The butter is soft.)'],
            ['finnish' => 'veitsi', 'english' => 'knife', 'category' => 'objects', 'example' => 'Veitsi on terävä. (The knife is sharp.)'],
            ['finnish' => 'haarukka', 'english' => 'fork', 'category' => 'objects', 'example' => 'Haarukka on metallinen. (The fork is metal.)'],
            ['finnish' => 'lusikka', 'english' => 'spoon', 'category' => 'objects', 'example' => 'Lusikka on iso. (The spoon is big.)'],
            ['finnish' => 'lautanen', 'english' => 'plate', 'category' => 'objects', 'example' => 'Lautanen on valkoinen. (The plate is white.)'],
            ['finnish' => 'kuppi', 'english' => 'cup', 'category' => 'objects', 'example' => 'Kuppi on täynnä. (The cup is full.)'],
            ['finnish' => 'lasi', 'english' => 'glass', 'category' => 'objects', 'example' => 'Lasi on rikki. (The glass is broken.)'],
            ['finnish' => 'lapsi', 'english' => 'child', 'category' => 'people', 'example' => 'Lapsi leikkii. (The child is playing.)'],
            ['finnish' => 'mies', 'english' => 'man', 'category' => 'people', 'example' => 'Mies kävelee. (The man is walking.)'],
            ['finnish' => 'nainen', 'english' => 'woman', 'category' => 'people', 'example' => 'Nainen lukee. (The woman is reading.)'],
            ['finnish' => 'ystävä', 'english' => 'friend', 'category' => 'people', 'example' => 'Ystävä auttaa minua. (The friend helps me.)'],
            ['finnish' => 'perhe', 'english' => 'family', 'category' => 'people', 'example' => 'Perhe syö yhdessä. (The family eats together.)'],
            ['finnish' => 'äiti', 'english' => 'mother', 'category' => 'people', 'example' => 'Äiti on kotona. (Mother is at home.)'],
            ['finnish' => 'isä', 'english' => 'father', 'category' => 'people', 'example' => 'Isä on töissä. (Father is at work.)'],
            ['finnish' => 'sisko', 'english' => 'sister', 'category' => 'people', 'example' => 'Sisko on nuori. (The sister is young.)'],
            ['finnish' => 'veli', 'english' => 'brother', 'category' => 'people', 'example' => 'Veli on vanhempi. (The brother is older.)'],
            ['finnish' => 'vauva', 'english' => 'baby', 'category' => 'people', 'example' => 'Vauva nukkuu. (The baby is sleeping.)'],
            ['finnish' => 'rakkaus', 'english' => 'love', 'category' => 'feelings', 'example' => 'Rakkaus on kaunis. (Love is beautiful.)'],
            ['finnish' => 'onnellinen', 'english' => 'happy', 'category' => 'feelings', 'example' => 'Olen onnellinen tänään. (I am happy today.)'],
            ['finnish' => 'surullinen', 'english' => 'sad', 'category' => 'feelings', 'example' => 'Hän on surullinen. (He/she is sad.)'],
            ['finnish' => 'vihainen', 'english' => 'angry', 'category' => 'feelings', 'example' => 'Olen vihainen sinulle. (I am angry with you.)'],
            ['finnish' => 'väsynyt', 'english' => 'tired', 'category' => 'feelings', 'example' => 'Olen väsynyt tänään. (I am tired today.)'],
            ['finnish' => 'kylmä', 'english' => 'cold', 'category' => 'feelings', 'example' => 'Ulkona on kylmä. (It is cold outside.)'],
            ['finnish' => 'kuuma', 'english' => 'hot', 'category' => 'feelings', 'example' => 'Kahvi on kuumaa. (The coffee is hot.)'],
            ['finnish' => 'nopea', 'english' => 'fast', 'category' => 'descriptions', 'example' => 'Auto on nopea. (The car is fast.)'],
            ['finnish' => 'hidas', 'english' => 'slow', 'category' => 'descriptions', 'example' => 'Hän kävelee hitaasti. (He/she walks slowly.)'],
            ['finnish' => 'kaunis', 'english' => 'beautiful', 'category' => 'descriptions', 'example' => 'Kukka on kaunis. (The flower is beautiful.)'],
            ['finnish' => 'iso', 'english' => 'big', 'category' => 'descriptions', 'example' => 'Talo on iso. (The house is big.)'],
            ['finnish' => 'pieni', 'english' => 'small', 'category' => 'descriptions', 'example' => 'Kissa on pieni. (The cat is small.)'],
        ];

        SharedWord::insert($words);
    }
}
