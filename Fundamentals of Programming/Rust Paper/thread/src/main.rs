use std::thread;
use std::time::Duration;

fn main() {
    thread::spawn(||
    {
        let mut x = 0;
        while x <= 5
        {
            println!("New thread: {}", x);
            x += 1;
            thread::sleep(Duration::from_secs(1));
        }
    });

    let mut  y = 0;
    while y <= 3
    {
        println!("Main thread: {}", y);
        y += 1;
        thread::sleep(Duration::from_secs(1));
    }
}
