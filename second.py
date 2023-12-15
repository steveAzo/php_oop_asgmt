from collections import Counter


class Stats:
    def __init__(self, numbers):
        self.numbers = numbers

        

    def mean(self):
        n = len(self.numbers)
        return sum(self.numbers)/n if n> 0 else 0
    
    def median(self):
        sorted_numbers = sorted(self.numbers)
        x = len(sorted_numbers)
        if x % 2 == 0:
            n1 = self.numbers[x//2-1]
            n2 = self.numbers[x//2]
            return (n1 + n2)/2
        
        return sorted_numbers[x//2]

    def mode(self):
        value_counts = Counter(self.numbers)
        max_count = max(value_counts.values())
        mode_values = [val for val, count in value_counts.items() if count == max_count]
    
        if max_count > 1:
                return mode_values[0] if len(mode_values) == 1 else mode_values
        else:
            return None
    

test = [4, 7, 1, 9, 3, 6, 8, 2, 5, 3]
computed = Stats(test)

print("Mode: ", computed.mean() )
print("Median: ", computed.median())
print("Mode: ", computed.mode())
    
    


