fn main() {
    // y gets made in outerscope
    let y = 10;
    println!("\n(Outerscope) Value of y: {}", y);
    {
        // b gets made in the innerscope. y is still in scope.
        let b = 92;
        println!("\n{{\n    (Innerscope) Value of y: {}", y);
        println!("    (Innerscope) Value of b: {}", b);
    }
    // b leaves scope, so b gets dropped and cannot be used. y is still in scope.
    println!("\n}}\n(Outerscope) Value of y: {}\n", y);
 // println!("\n(Outerscope) Value of b: {}", b); Will give error.
}
