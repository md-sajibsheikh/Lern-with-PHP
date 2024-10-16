<!-- তিনের মধ্যে সেরা

EN
সমস্যার বিবরণ
এমন একটি প্রোগ্রাম লিখ যেখানে ইউজারের লিখা তিনটি সংখ্যা থেকে সর্বোচ্চ সংখ্যাটি প্রিন্ট হবে।

ইনপুট
ইনপুট হবে তিনট integer সংখ্যা।

আউটপুট
আউটপুট হবে সর্বোচ্চ সংখ্যাটি।

সীমাবদ্ধতা
-2 31 ≤ |S| ≤ 231 - 1
উদাহরণ:
Enter three numbers

ইনপুট:
10 20 30
আউটপুট:
30 -->



3 ta intiger akt sate neyar jrno '%d %d %d' vabe decliar kra jay

<?php

fscanf(STDIN, '%d %d %d', $a, $b, $c);

if ($a > $b & $a > $c) {

    echo $a;
} elseif ($b > $a & $b > $c) {
    echo $b;
} else {
    echo $c;
}
