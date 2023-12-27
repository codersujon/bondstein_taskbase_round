<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- Task-3 -->
    
    <script type="text/javascript">

        var TwoSum = function(numbers, number){
            for(let i = 0; i<=numbers.length; i++){
                for(let j = i+1; j<numbers.length; j++){
                    if(numbers[i]+ numbers[j] == number){
                        return [i, j];
                    }
                }
            }

            /**
             * If the targe number not in the array list()
            */
            
            return "No such numbers in the list";
        }
        /**
         * Non-Decreasing Order
         */
        document.write(TwoSum([2, 7, 11, 15], 26));

    </script>
</body>
</html>