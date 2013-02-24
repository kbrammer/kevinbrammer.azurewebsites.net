Here's another quick example on how to call an API using [httpie](https://github.com/jkbr/httpie) and parse the JSON results in [Powershell 3.0](http://www.microsoft.com/en-us/download/details.aspx?id=29939) using [ConvertTo-Json](http://technet.microsoft.com/en-us/library/hh849922.aspx):

	$json = @{}
	$c = @{}
	try {
		$json = http https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents | ConvertFrom-Json
        
		#NOTE: you may need to convert to json more than once
		#$d = $json.d | ConvertFrom-Json
    
		$json | ForEach-Object { $_.name + "`t" + $_.url }
	} catch {
			Write-Host "Oops"
	}