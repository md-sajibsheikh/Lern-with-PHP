<!-- ভাগফল ক্যালকুলেটর

EN
সমস্যার বিবরণ
এমন একটি প্রোগ্রাম লিখ যেখানে দুইটি সংখ্যার ভাগফল দেখানো হবে। (integer ভাগফল )

ইনপুট
ইনপুট হবে দুইটি সংখ্যা।

আউটপুট
আউটপুট হবে ভাগফল যা একটি integer সংখ্যা।

সীমাবদ্ধতা
-2 31 ≤ |S| ≤ 231 - 1
উদাহরণ:
Enter two numbers

ইনপুট:
4 2
আউটপুট:
2 -->

<?php

fscanf(STDIN, '%d %d', $a, $b);

if ($b !== 0) {
    $result = (int)($a / $b);
    echo $result;
} else {
    echo $a;
}
