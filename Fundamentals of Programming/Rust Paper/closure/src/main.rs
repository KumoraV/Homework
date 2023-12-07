// Function to add to money
fn fun_add(x:u64, mut money: u64)
{
    money += x;
    println!("'Using function' Money: {}", money);
}

fn main() {
    let mut money = 20;
    println!("\nOriginal money: {}", money);

    // Using function to add money
    fun_add(34, money);
    println!("Money after using function: {}", money);

    // Using closure to add money
    let mut add_money = |x: u64| // Closure
    {
        money += x;
        println!("'Using closure' Money: {}", money);
    };
    add_money(34); 
    add_money(34);
    println!("Money after using closure: {}\n", money);
}

