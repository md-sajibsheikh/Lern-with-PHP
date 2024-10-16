Problem

সরল যোগ

সমস্যার বিবরণ

এমন একটি প্রোগ্রাম লিখ যেখানে দুইটি নাম্বারের যোগফল দেখানো হবে।

ইনপুট : ইনপুট হবে দুইটি integer সংখ্যা।

আউটপুট : আউটপুট হবে সংখ্যা দুইটির যোগফল।

সীমাবদ্ধতা
-2 31 ≤ |S| ≤ 231 - 1
উদাহরণ: Enter two numbers

ইনপুট: 5 2
আউটপুট: 7


Problem solved

আপনার প্রদত্ত PHP কোডটি দুইটি সংখ্যার যোগফল নির্ণয় করে। নিচে কোডে ব্যবহৃত প্রতিটি অংশের বিস্তারিত ব্যাখ্যা দেওয়া হল:

### 1. `fscanf(STDIN, "%d %d", $num1, $num2);`

- **`fscanf`**: এটি একটি ফাংশন যা ফরম্যাট অনুযায়ী ইনপুট গ্রহণ করে।
- **`STDIN`**: এটি standard input থেকে ডাটা গ্রহণ করে। অর্থাৎ, ব্যবহারকারী যেটি ইনপুট করবে, সেটি `STDIN` এর মাধ্যমে কোডে প্রবেশ করবে।
- **`"%d %d"`**: ফরম্যাট স্পেসিফায়ার, যা নির্দেশ করে যে দুইটি সংখ্যা (integer) ইনপুট হিসেবে নেওয়া হবে।
- **`%d`**: এটা একটি integer সংখ্যা নির্দেশ করে।
- **`$num1, $num2`**: এই দুইটি ভ্যারিয়েবলে ইনপুটের প্রথম ও দ্বিতীয় সংখ্যা সংরক্ষণ করা হবে।

### 2. `$sum = $num1 + $num2;`

- এখানে **`$num1 + $num2`** দ্বারা দুইটি সংখ্যার যোগফল নির্ণয় করা হচ্ছে এবং সেই ফলাফল **`$sum`** ভ্যারিয়েবলে সংরক্ষিত হচ্ছে।

### 3. `echo ($sum);`

- **`echo`**: এটি একটি ফাংশন যা আউটপুট প্রিন্ট করার জন্য ব্যবহৃত হয়।
- এখানে **`$sum`** এর মান, অর্থাৎ দুইটি সংখ্যার যোগফল প্রিন্ট করা হচ্ছে।

### পুরো কোডটির কাজের সারমর্ম:

1. ব্যবহারকারী দুইটি সংখ্যা ইনপুট করবে।
2. সেই সংখ্যা দুইটির যোগফল গণনা করা হবে।
3. শেষে সেই যোগফল আউটপুট হিসেবে প্রিন্ট করা হবে।

### উদাহরণ:

**ইনপুট:**
```
5 3
```
**আউটপুট:**
```
8
```
### কোডের কাজের ক্রমানুসারে:

1. **fscanf(STDIN, "%d %d", $num1, $num2);**: ব্যবহারকারীর কাছ থেকে দুইটি সংখ্যা (5 এবং 3) ইনপুট নেয়।
2. **$sum = $num1 + $num2;**: 5 + 3 করে $sum ভ্যারিয়েবলে 8 সংরক্ষণ করে।
3. **echo ($sum);**: যোগফল 8 প্রিন্ট করে।