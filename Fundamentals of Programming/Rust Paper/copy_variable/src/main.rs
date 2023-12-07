fn main() {
    let height = 10; // The data is added to the stack. Owner is height.
    let total = height; // A new instance of the data is added to the stack. This owner is total.
    println!("\nValue of height: {}", height);
    println!("Value of total: {}\n", total);

    let name = String::from("Jester"); // The data is added to the heap. Owner is name.
    let person = name; // Ownership of the data 'Jester' gets moved from name to person. name gets dropped.
    // println!("\nValue of name: {}\n", name); Will get error because name is dropped
    println!("Value of person: {}\n", person);
    
    let car = String::from("Yaris"); // The data is added to the heap. Owner is name.
    let brand = car.clone(); // A new copy of car is made and ownership is branc.
    println!("Value of car: {}", car); 
    println!("Value of brand: {}\n", brand);
}
