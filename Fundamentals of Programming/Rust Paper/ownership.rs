fn main() 
{
    let x = String::from("Test Print"); // Variable x get's made here
    println!("{}", x); // x is still in scope
    print_value(x); // x leaves scope, x gets dropped, and y becomes the owner of the value
    // println!("{}", x); This line will give an error since x no longer exsits
}

fn print_value(y: String)
{
    println!("{}", y); // y is now the owner of the value x had
}

