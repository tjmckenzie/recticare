<!DOCTYPE html>
<html>
 	<head>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>RectiCare Contact Message</title>

</head>
<body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; padding: 0;" bgcolor="#f6f6f6">
<style type="text/css">
.btn-primary table td:hover { background-color: #34495e !important; }
.btn-primary a:hover { background-color: #34495e !important; border-color: #34495e !important; }
></style>
	<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;" bgcolor="#f6f6f6">
		<tr>
			<td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td>
			<td class="container" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; display: block; max-width: 580px; width: 100% !important; margin: 0 auto; padding: 0;" valign="top">
				<div class="content" style="box-sizing: border-box; display: block; max-width: 580px; margin: 0 auto; padding: 0;">


					<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; font-size: 16px !important;">New Contact Message from {{ $contact->name }}</span>
					<table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border-radius: 0 !important; border-left-width: 0 !important; border-right-width: 0 !important; background-color: #fff;" bgcolor="#fff">


						<tr>
							<td class="wrapper" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; box-sizing: border-box; padding: 10px;" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
									<tr>
										<td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top">
											<h1 style="color: #000000; font-family: sans-serif; font-weight: 300; line-height: 1.4; font-size: 28px !important; text-align: center; text-transform: capitalize; margin: 0 0 10px;" align="center">New Message</h1>
											<p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; margin: 0 0 15px;">
												<strong>Name:</strong> {{ $contact->name }}<br>
												<strong>Phone:</strong> {{ $contact->phone }}<br>
												<strong>Email:</strong> {{ $contact->email }}<br>
											</p>
											<hr style="border-bottom-color: #f6f6f6; border-bottom-style: solid; margin: 20px 0; border-width: 0 0 1px;">
											<h2 style="color: #000000; font-family: sans-serif; font-weight: 400; line-height: 1.4; margin: 0 0 15px;">{{ $contact->subject }}</h2>
											<p style="font-family: sans-serif; font-size: 16px !important; font-weight: normal; margin: 0 0 15px;">{{ $contact->message }}</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>


					</table>


					<div class="footer" style="clear: both; padding-top: 10px; text-align: center; width: 100%;" align="center">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
							<tr>
								<td class="content-block" style="font-family: sans-serif; font-size: 16px !important; vertical-align: top; color: #999999; text-align: center;" align="center" valign="top">
									Sent on {{ $contact->created_at }} by {{ $contact->ip_address }}
								</td>
							</tr>
						</table>
					</div>



					</div>
				</td>
				<td style="font-family: sans-serif; font-size: 16px !important; vertical-align: top;" valign="top"> </td>
			</tr>
		</table>
	</body>
	</html>
