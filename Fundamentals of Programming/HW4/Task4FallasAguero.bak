#lang racket

(define (delall value vList) ;Removes all occurence of 'value' from 'vList'.
  (cond
    ((not(member value vList)) vList) ; Checks if the value is not in the list. If not, print the list.
    (else (delall value (remove value vList))))) ; Otherwise, call the function but with the first occurence of the value removed.

(define (getextremes vList) ;Prints the max and min of a list.
  (cond
    ((null? vList)'()) ; If it's an empty list, return empty.
    (else (list 
          (apply max vList) ; Applys the function max to the whole list.
          (apply min vList))))) ; Applys the function min to the whole list.

(define (unite list1 list2)
  (remove-duplicates (append list1 list2))) ;Append both lists and remove duplicate, which is the union of the two lists.

(define (checkset list1)
  (boolean? (check-duplicates list1))) ;Check if the result is a boolean, in that case no repetitons, or a value, which would be repetition.
  